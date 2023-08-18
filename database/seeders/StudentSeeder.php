<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'name'=>'test',
            'email' => 'test@gmail.com',
            'password' => \Hash::make('PP12345679$#'),
        ]);

        \DB::table('users')->insert([
            'name'=>'ali khaled',
            'email' => 'Alikhaled@gmail.com',
            'password' => \Hash::make('PP12345679$#'),
        ]);
    }
}
