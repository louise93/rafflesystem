<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Dev Core',
            'email' => 'tambola@devcoretech.com',
            'password' => bcrypt('Pass@word8'),
            'is_admin'  => 0 ,
        ]);
        DB::table('users')->insert([
            'name' => 'dev_admin',
            'email' => 'admin@devcoretech.com',
            'password' => bcrypt('Pass@word8'),
            'is_admin'  => 1 ,
        ]);
    }
}
