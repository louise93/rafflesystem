<?php

namespace App\Http\Controllers;
use App\models\Wallet;
use App\models\Drawschedule;
use Auth;
use Validator;
use App\models\Ticket;
use App\models\History;
use App\models\Purchase;
use Illuminate\Http\Request;
use DB;
use App\User;

use CoinGate\CoinGate;

class DashboardController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {
		$month =date('m');
		$day =date('Y-m-d');
		$page_data = [
						'title' 		=> 'TAMBOLA',
						'slogan' 		=> 'Pick a number, buy it, win it',
						'button' 		=> true,
						'balance'		=> Wallet::where('user_id',Auth::user()->id)->value('current_balance'),
						'schedule'		=> date('F d, Y' ,strtotime(Drawschedule::where('status',0)->value('draw_date'))),
						'total_users'	=> User::all(),
						'ticket'	=> Ticket::all(),
						'total_deposit' =>  DB::table('deposit_logs')->where('user_id' ,Auth::user()->id)->whereMonth('created_at',$month)->where('status','paid')->sum('total_price'),
						'total_deposit_today' =>  DB::table('deposit_logs')->where('user_id' ,Auth::user()->id)->whereDate('created_at',$day)->where('status','paid')->sum('total_price'),
						'total_purchase' =>  DB::table('purchase_history')->where('user_id' ,Auth::user()->id)->whereMonth('created_at',$month)->sum('ticket_price'),
						'today'		=> DB::table('history')->where('user_id',Auth::user()->id)->whereDate('created_at',date('Y-m-d'))->paginate(10),
						'recent_invoice'  => DB::table('purchase_history')->where('user_id',Auth::user()->id)->orderBy('id','desc')->paginate(5)
					];

		return view('userpanel.dashboard1')->with($page_data);
	}
	public function myTickets() {

		$page_data = [
				'title' 		=> 'TAMBOLA',
				'slogan' 		=> 'Pick a number, buy it, win it',
				'button' 		=> true ,
				'results'		=> DB::table('tickets')->where('user_id',Auth::user()->id)->get()
			];
		return view('userpanel.myticket')->with($page_data);
	}

	public function buyTicket(Request $request) {

			$ticket_price   =  20; // in USD
			$user_id 		=	Auth::user()->id;
			$ticket_number  = $request->input('number');
			$response_date	= [] ;


			$validator = Validator::make(['ticket_number' => $ticket_number], [
								'ticket_number' => 'required|unique:tickets',
					]);

			$schedule = DB::table('draw_schedule')->where('status',0)->value('status') + 1 ;

			if($schedule == 1) {

				if ( $validator->fails() ) {

						$response_data = [
											'heading'  	=> 'Error',
											'msg_type'	=>  'error',
											'icon'		=>	'error',
											'msg'		=> 'Ticket no.' . $ticket_number . ' is alredy taken. Please try again.'
						];
				}
				else {

						$tickets 				= new Ticket();
						$tickets->user_id 		= $user_id;
						$tickets->ticket_number = $ticket_number;
						$wallet_balance 		= Wallet::where('user_id',Auth::user()->id)->value('current_balance');

						if( $wallet_balance > $ticket_price ) {

							if( $tickets->save() ) {

								$purchase 				 = new Purchase();
								$purchase->user_id 		 = $user_id;
								$purchase->ticket_number = $ticket_number;
								$purchase->ticket_price	 = $ticket_price;
								$purchase->save();

								$history				=	new History();
								$history->user_id		= $user_id;
								$history->action_taken	= 'Bought ticket number ' . $ticket_number .' @ ' .$ticket_price . ' USD';
								$history->save();

								DB::table('wallet')->where('user_id',$user_id)->decrement('current_balance',$ticket_price);

								$response_data = [
													'heading'  	=> 'Success',
													'msg_type'	=>  'success',
													'icon'		=>	'success',
													'msg'		=> 'You have successfully bought Ticket no.' . $ticket_number
											];
							}
						}
						else {

							$response_data = [
												'heading'  	=> 'Error',
												'msg_type'	=>  'error',
												'icon'		=>	'error',
												'msg'		=> 'Not enough wallet balance'
											];
						}
				}
			}
			else {

				$response_data = [
									'heading'  	=> 'Error',
									'msg_type'	=>  'error',
									'icon'		=>	'error',
									'msg'		=> 'Buying of ticket has been closed'
								];
			}
			return response()->json($response_data);

	}

	public function balance(){

			$wallet_balance  = Wallet::where('user_id',Auth::user()->id)->value('current_balance');

			return response()->json($wallet_balance);

	}
	public function getTickets() {

		$tickets = Purchase::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();

		return response()->json($tickets);
	}
	public function getTicketsRecent() {

		$tickets = Purchase::orderBy('id','desc')->get();

		return response()->json($tickets);
	}
}
