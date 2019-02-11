<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::post('buyticket','DashboardController@buyTicket');
Route::get('balance',	'DashboardController@balance');
Route::get('gettickets','DashboardController@getTickets');
Route::get('deposithistory','DepositController@deposited');
Route::get('getticketsrecent','DashboardController@getTicketsRecent');
Route::get('/mytickets', 'DashboardController@myTickets');
//Deposit
Route::get('/mywallet','DepositController@index');
Route::post('/deposit/create','DepositController@createDeposit');
Route::post('callback','CoingateController@callback');
Route::get('wallet/deposit','DepositController@create');

Route::get('/ticket/history','LogController@index');
Route::get('logs','LogController@getLogs');
Route::get('results','ResultController@index');
Route::get('set_winner','ResultController@setResult');
Route::get('set_drawdate','ResultController@setSchedule');
Route::post('findwinner','ResultController@findWinner');


Route::get('ticket/buy','TicketController@index');
Route::get('ticket/list','TicketController@getTicketList');
Route::post('ticket/confirm','TicketController@buyTicket');
Route::post('ticket/dt','TicketController@ticketData');



Route::get('new_ticket', 'SupportTicketsController@create');
Route::post('new_ticket', 'SupportTicketsController@store');
Route::get('tickets/my_tickets', 'SupportTicketsController@userTickets');
Route::get('tickets/{ticket_id}', 'SupportTicketsController@show');
Route::post('comment', 'CommentsController@postComment');

Route::get('deposit/coingatestatus/{order_id}','DepositController@getCoingateStatus');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('tickets', 'SupportTicketsController@index');
    Route::post('close_ticket/{ticket_id}', 'SupportTicketsController@close');
});
