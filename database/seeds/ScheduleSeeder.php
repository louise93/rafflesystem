<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('draw_schedule')->insert([
                
                'start_date'  => '2019-01-01',
                'draw_date'   =>  '2019-01-31',
                'status'      => 0,

        ]);
    }
}
