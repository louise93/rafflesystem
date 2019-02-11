<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositLogsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('deposit_logs', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('payment_method');
			$table->double('amount_deposited');
			$table->double('total_price');
			$table->string('deposit_address');
			$table->string('coingate_invoice_id');
			$table->integer('order_id')->default('1');
			$table->string('payment_url');
			$table->string('token');
			$table->string('status');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('deposit_logs');
	}
}
