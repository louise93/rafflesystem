<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Wallet;
use App\models\Drawschedule;
use Auth;
use Validator;
use App\models\Ticket;
use App\models\History;
use App\models\Purchase;
use App\models\Deposit;

use DB;
use Carbon\Carbon;
use CoinGate\CoinGate;
class DepositController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
	}
    public function index() {

        $page_data = [
            'title' 	    => 'TAMBOLA',
            'slogan' 	    => 'Pick a number, buy it, win it',
            'button' 	    => true,
            'balance'	    => Wallet::where('user_id',Auth::user()->id)->value('current_balance'),
            'deposit_data'  => DB::table('deposit_logs')->where('user_id',Auth::user()->id)->orderBy('id','desc')->get(),
            'todays_deposit' => DB::table('deposit_logs')->where('status','paid')->where('user_id',Auth::user()->id)->whereDate('created_at', '=', Carbon::today()->toDateString())->sum('total_price'),
            'total_deposit' => DB::table('deposit_logs')->where('user_id',Auth::user()->id)->where('status','paid')->sum('total_price')
        ];

        return view('userpanel.mywallet')->with($page_data);
    }

    public function create() {
          return view('userpanel.deposit');
    }

    public function createDeposit(Request  $request) {

        //currency you want to pay
        $currency = "USD";
        //currency you want to receive
        $receive_currency = "BTC";
        //randomly generated token to secure the form
        $token = hash('sha256', 'coingate'.rand());
        $coingate_invoice_id = 'coingate'.rand();
        $o = Deposit::create([
        'user_id'   => auth()->id(),
        'coingate_invoice_id' => $coingate_invoice_id,
        'token' => $token,
        'order_id'  => auth()->id(),
        'amount_deposited' => request('number'),
        'deposit_address' => $coingate_invoice_id,
        'payment_method' => 'BTC',
        'total_price'   => request('number'),
        'payment_url'   => $coingate_invoice_id,
        'status' => 'unpaid'
        ]);

        $od_id  =   $o->id;
        //Post parameters , which are send to CoinGate
        $post_params = array(
            'order_id'          =>  $od_id,
            'token'             =>  $token,
            'price_amount'      =>  request('number'),
            'price_currency'    =>  $currency,
            'receive_currency'  =>  $receive_currency,
            'callback_url'      => 'http://tambola.devcoretech.com/coingate-callback.php',
            'cancel_url'        => 'http://tambola.devcoretech.com/deposit',
            'success_url'       => 'http://tambola.devcoretech.com/deposit',
         );
       //Package -> coingate-php
       try {
        $order = \CoinGate\Merchant\Order::create($post_params, array(),array(
        'environment'               => 'sandbox',
        'auth_token'                => 'YJ8zXNyMsNYk1a5TuwrpENJzY1kfnBjjF7vnVjFu',
        'curlopt_ssl_verifypeer'    => FALSE));

        if ($order) {
           // echo $order->status;
           // return redirect($order->payment_url);

           $dpst = Deposit::find($od_id);
           $dpst->update(['order_id' => $order->id]);

            $order_id		=   $order->id;
            $pay_currency	= 'BTC';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api-sandbox.coingate.com/v2/orders/".$order_id."/checkout");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "pay_currency=".$pay_currency);
            curl_setopt($ch, CURLOPT_POST, 1);

            $headers = array();
            $headers[] = "Authorization: Token YJ8zXNyMsNYk1a5TuwrpENJzY1kfnBjjF7vnVjFu";
            $headers[] = "Content-Type: application/x-www-form-urlencoded";
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {

                $response_data = [
                    'heading'  	=>  'Error',
                    'msg_type'	=>  'error',
                    'icon'		=>	'error',
                    'msg'		=>  'Something went wrong',
                    'amount'    => '',
                    'address'   => ''
                ];
            }
            $json = json_decode($result);

            $dpt = Deposit::find($od_id);
            $dpt->update(
                        [
                            'deposit_address'   => $json->payment_address,
                            'amount_deposited'  => $json->pay_amount,
                            'payment_url'       => $json->payment_url,
                            'status'            => $json->status
                        ]);

                        $history				=	new History();
                        $history->user_id		= Auth::user()->id;
                        $history->action_taken	= 'Deposited ' . $json->pay_amount  .' BTC';
                        $history->save();

            $response_data = [
                              'heading'  	=> 'Success',
                              'msg_type'	=>  'success',
                              'icon'		  =>	'success',
                              'msg'		    => 'Send ' . $json->pay_amount . ' BTC to : ' . $json->payment_address,
                              'amount'    => $json->pay_amount,
                              'payment_address'   => $json->payment_address ,
                              'order_id'  => $json->id
                          ];

        } else {
            $response_data = [
                              'heading'  	=> 'Error',
                              'msg_type'	=>  'error',
                              'icon'		  =>	'error',
                              'msg'		    => '',
                              'amount'    => $json->pay_amount,
                              'payment_address'   => $json->payment_address,
                              'order_id'  => $json->id
                          ];
        }
        //return response()->json($response_data);
          return view('userpanel.payment')->with($response_data);
        }
        catch (Exception $e) {
                echo $e->getMessage(); // BadCredentials Not found App by Access-Key
        }


      }
    public function getCoingateStatus($deposit_id) {

          $order = \CoinGate\Merchant\Order::find($deposit_id, array(), array(
            'environment' => 'sandbox', // sandbox OR live
            'auth_token' => 'YJ8zXNyMsNYk1a5TuwrpENJzY1kfnBjjF7vnVjFu',
            'curlopt_ssl_verifypeer'    => FALSE));
          return response()->json($order->status);

      }
    public function callback(Request $request) {
        $order = Deposit::where('token',$request->input('token'));
        if ($request->input('token') == $order->token) {
            $status = NULL;
            if ($request->input('status') == 'paid') {
              if ($request->input('price') >= $order->total_price) {
                $status = 'paid';
                DB::table('deposit_logs')->where('user_id',$order->user_id)->increment('currenct_balance',$order->total_price);
              }
            }
            else {
              $status = $request->input('status');
            }
            if (!is_null($status)) {
              $order->update(['status' => $status]);
            }
          }
        }

    public function deposited(){

          $deposits = [
                              'today'       => DB::table('deposit_logs')
                                                ->where('status','paid')
                                                ->where('user_id',Auth::user()->id)
                                                ->whereDate('created_at', '=', Carbon::today()
                                                ->toDateString())
                                                ->sum('total_price'),
                            'total_deposits' => DB::table('deposit_logs')
                                                ->where('user_id',Auth::user()->id)
                                                ->where('status','paid')
                                                ->sum('total_price')
                          ];
			return response()->json($deposits);
	}
}
