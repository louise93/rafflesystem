<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB:
use App\models\Deposit;
use App\models\History;
use App\models\Purchase;

class CoingateController extends Controller
{
    public function callback(Request $request) {
        //$order = Deposit::where('order_id', $_POST['id'])->get();
        // if ($_POST['token'] == $order->token) {
        //     $status = NULL;
        //     if ($_POST['status'] == 'paid') {
        //       if (($_POST['price_amount'] >= $order->total_price) {
        //         $status = 'paid';
        //         DB::table('deposit_logs')->where('user_id',$order->user_id)->increment('currenct_balance',$order->total_price);
        //       }
        //     }
        //     else {
        //       $status = $request->input('status');
        //     }
        //     if (!is_null($status)) {

                    DB::table('deposit_logs')->where('order_id',$_POST['id'])->update(['status' => $_POST['status']]);
           // }
          }
        //}

        public function getLatestTicketBuy() {


            $data =  [

                    ]

        }
}
