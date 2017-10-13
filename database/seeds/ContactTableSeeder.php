<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->delete();
        DB::table('contact')->insert(array(
            array('full_name'=>'John Anderson','email'=>'ja@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'John Mully','email'=>'ja1@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'ABD Anderson','email'=>'ja2@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Cally Anderson','email'=>'ja3@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Cody Anderson','email'=>'ja4@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Todd Anderson','email'=>'ja5@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Root Anderson','email'=>'ja6@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Joe Anderson','email'=>'ja7@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Maeen Ali','email'=>'ja8@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Billy Tom','email'=>'ja9@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Fransico Totti','email'=>'ja88@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Adil Rashid','email'=>'ja00@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Chritian Ronaldo','email'=>'ja55@oscar.co.uk', 'phone'=>'0987654456'),
            array('full_name'=>'Johnathan Thrott','email'=>'ja99@oscar.co.uk', 'phone'=>'0987654456'),
        ));
    }
}
