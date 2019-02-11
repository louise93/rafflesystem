<?php

use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallet')->insert([
            'user_id'           => 1,
            'current_balance'    => 5000,
            'previous_balance'  => 1000,
            'status'            => 0
        ]);
    }
}
