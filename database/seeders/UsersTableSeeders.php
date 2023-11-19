<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name'=>'Dharma',
            'email'=>'test@test.com',
            'password'=>\Hash::make('asdasdasd'),
            'dob'=>'1111/11/30',
            'phone'=>'082222222222'
        ]);
    }
}
