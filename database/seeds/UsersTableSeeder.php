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
            array('name'=>'admin','email'=>'contact@helloworld.com', 'password'=>\Illuminate\Support\Facades\Hash::make('happy2017'))
        ));
    }
}
