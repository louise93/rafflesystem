<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\models\Ticket;
use App\models\History;
use App\models\Purchase;
use App\models\Wallet;
use App\models\Drawschedule;


class TicketController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
    }
    public function index ()
    {
        $month =date('m');
        $data  =
                [
                    'tickets'        => DB::table('tickets')->where('user_id',Auth::user()->id)->get(),
                    'balance'		 => Wallet::where('user_id',Auth::user()->id)->value('current_balance'),
                    'total_purchase' =>  DB::table('purchase_history')->where('user_id' ,Auth::user()->id)->whereMonth('created_at',$month)->sum('ticket_price')

                ];
        return view('userpanel.buyticket')->with($data);
    }

    public function getTicketList() {

		$tickets = DB::table('ticket_numbers')->get();

		return response()->json($tickets);
    }

    public function buyTicket(Request $request) {

        $ticket_price   =  20; // in USD
        $user_id 		=	Auth::user()->id;
        $qty            = $request->input('qty');
        $wallet_balance = Wallet::where('user_id',Auth::user()->id)->value('current_balance');

        $total_purchase = $qty * $ticket_price ;
        $tickets        = [] ;
        $id = Ticket::whereRaw('id = (Select max(id) from tickets)')->get();
        $last_ticket = json_encode($id);

        $new_ticket = 0;

        foreach($id as $id) {
            $last_ticket = $id->ticket_number;
        }
        if($total_purchase <= $wallet_balance) {
                for($i=1;$i <= $qty ;  $i ++ ) {

                    $new_ticket =$last_ticket + $i;
                    array_push($tickets,$new_ticket);
                   DB::table('tickets')->insert(['user_id' => Auth::user()->id ,'ticket_number' => $new_ticket ]);

                }
                DB::table('wallet')->where('user_id',Auth::user()->id)->decrement('current_balance',$total_purchase);
                $purchase 				 = new Purchase();
        				$purchase->user_id 		 = $user_id;
        				$purchase->ticket_number = json_encode($tickets);
        				$purchase->ticket_price	 = $total_purchase;
                $purchase->save();

                $response_data  =  [ 'msg' => 'Successfully bought tickets' ,'msg_type' => 'success'];

        }

        else {

            $response_data  =  [ 'msg' => 'Not enough wallet balance','msg_type' => 'error'];
        }




        return response()->json($response_data);

    }

    public function ticketData() {

        $dt = DB::table('tickets')->where('user_id',Auth::user()->id)->get();

        return response()->json($dt);
    }
}
