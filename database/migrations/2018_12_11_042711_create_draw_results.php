<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrawResults extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('draw_results', function (Blueprint $table) {
			$table->increments('id');
			$table->date('draw_date');
			$table->integer('winner');
			$table->string('winning_number');
			$table->string('prize');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('draw_results');
	}
}
