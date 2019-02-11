<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\History;
use DB;
class LogController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
    }
    
    public function index(){

                $page_data = [ 
                                'title' 	=> 'TAMBOLA',
                                'slogan' 	=> 'Pick a number, buy it, win it',
                                'button' 	=> false,
                                'pucrhase_history' => Db::table('purchase_history')->where('user_id',Auth::user()->id)->paginate(10)
                ];  
        return view('userpanel.purchasehistory')->with($page_data);
    }

    public function getLogs(Request $request){

        $data = History::paginate(10);

            $response = [
                'pagination' => [
                    'total' => $data->total(),
                    'per_page' => $data->perPage(),
                    'current_page' => $data->currentPage(),
                    'last_page' => $data->lastPage(),
                    'from' => $data->firstItem(),
                    'to' => $data->lastItem()
                ],
                'data' => $data
            ];

        return response()->json($response);
    }
}
