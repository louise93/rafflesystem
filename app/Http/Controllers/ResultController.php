<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\models\Ticket;
use App\User;
class ResultController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
    }
    
    public function index(){

                $page_data = [ 
                                'title' 	=> 'TAMBOLA',
                                'slogan' 	=> 'Pick a number, buy it, win it',
                                'button' 	=> false,
                                'results'   => DB::table('draw_results')->join('users', 'draw_results.winner', '=', 'users.id')
                                ->select('draw_results.*', 'users.name')
                                ->get()
                             ];  

                return view('userpanel.result')->with($page_data);
    }
    public function setResult(){

        $page_data = [ 
                        'title' 	=> 'TAMBOLA',
                        'slogan' 	=> 'Pick a number, buy it, win it',
                        'button' 	=> true,
                        'users'     => DB::table('users')->get(),
                        'results'   => DB::table('draw_results')->join('users', 'draw_results.winner', '=', 'users.id')
                        ->select('draw_results.*', 'users.name')
                        ->get()
                    ];  
        return view('userpanel.set_winner')->with($page_data);
    }
    public function setSchedule(){

        $page_data = [ 
                        'title' 	=> 'TAMBOLA',
                        'slogan' 	=> 'Pick a number, buy it, win it',
                        'button' 	=> true,
                        'results'   => DB::table('draw_schedule')->get()
                    ];  
        return view('userpanel.set_drawdate')->with($page_data);
    }


    public function findWinner() {

                $winning_number =  Ticket::all()->random(1);
               // $name = User::find($winning_number->user_id);
               $user_id = NULL ;
               $number = NULL;
                foreach($winning_number as $winning_number) {

                    $user_id = $winning_number->user_id;
                    $number  = $winning_number->ticket_number;
                }
                $name = User::find($user_id);

                $data           =   [
                                        'lucky_number' => $number,
                                        'lucky_winner'  => $name->name
                                    ];

                 return response()->json($data);
        
    }
}
