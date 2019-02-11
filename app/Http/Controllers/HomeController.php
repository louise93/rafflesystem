<?php

namespace App\Http\Controllers;

use DB;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {


		$data =  [
					'draw_schedule' => DB::table('draw_schedule')->orderBy('draw_date','DESC')->paginate(5),
					'results'   => DB::table('draw_results')->join('users', 'draw_results.winner', '=', 'users.id')
					->select('draw_results.*', 'users.name')->take(3)
					->get()
		];
		return view('welcome')->with($data);
	}
}
