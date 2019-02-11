<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model {
	protected $table = 'deposit_logs';

	protected $fillable = [
		'user_id', 'token', 'amount_deposited','payment_method','total_price',
		'coingate_invoice_id','payment_url','order_id','status','deposit_address'
    ];

}
