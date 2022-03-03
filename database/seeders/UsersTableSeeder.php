<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' =>'Adam', 
            'surname' =>'Nowak',
            'email' =>'Adamnowak@gmail.com', 
            'password' =>bcrypt('pass'),
            'type' =>('admin'),
        ]);
    }
}