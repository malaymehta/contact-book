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
        DB::table('users')->delete();
        DB::table('users')->insert(array(
            array('name'=>'admin','email'=>'admin@oscar.co.uk', 'password'=>\Illuminate\Support\Facades\Hash::make('password'))
        ));
    }
}
