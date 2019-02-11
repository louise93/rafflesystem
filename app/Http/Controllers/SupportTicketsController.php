<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\SupportTicket;
use Auth;

use App\Mailers\AppMailer;

class SupportTicketsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index()
  {
      $tickets = SupportTicket::paginate(10);
      $categories = Category::all();

      return view('tickets.index', compact('tickets', 'categories'));
  }

  public function create(){
      $categories = Category::all();
      return view('tickets.create', compact('categories'));
    }

    public function store(Request $request, AppMailer $mailer)
    {
      $this->validate($request, [
              'title'     => 'required',
              'category'  => 'required',
              'priority'  => 'required',
              'message'   => 'required'
          ]);

          $ticket = new SupportTicket([
              'title'     => $request->input('title'),
              'user_id'   => Auth::user()->id,
              'ticket_id' => strtoupper(str_random(10)),
              'category_id'  => $request->input('category'),
              'priority'  => $request->input('priority'),
              'message'   => $request->input('message'),
              'status'    => "Open",
          ]);

          $ticket->save();

         $mailer->sendTicketInformation(Auth::user(), $ticket);

          return redirect()->back()->with("status", "A ticket with ID: #$ticket->ticket_id has been opened.");
        }


    public function userTickets(){
      $tickets = SupportTicket::where('user_id', Auth::user()->id)->paginate(10);
      $categories = Category::all();

      return view('tickets.user_tickets', compact('tickets', 'categories'));
  }

  public function show($ticket_id)
  {
    $ticket = SupportTicket::where('ticket_id', $ticket_id)->firstOrFail();

    $category = $ticket->category;
    $comments = $ticket->comments;

    return view('tickets.show', compact('ticket', 'category','comments'));
  }

  public function close($ticket_id, AppMailer $mailer) {
      $ticket = SupportTicket::where('ticket_id', $ticket_id)->firstOrFail();
      $ticket->status = 'Closed';

      $ticket->save();

      $ticketOwner = $ticket->user;

      $mailer->sendTicketStatusNotification($ticketOwner, $ticket);

      return redirect()->back()->with("status", "The ticket has been closed.");
  }

}
