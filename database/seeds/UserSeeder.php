<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'first_name'=> 'mounder',
            'last_name'=>'goumeidane',
            'email'=>'moundergoumeidane@outlook.com',
            'password'=> bcrypt('mounder'),
        ]);
    }
}
