<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('admins')->insert([
            'name'=>'Yousef Elkept',
            'email' => 'Yalkept@gmail.com',
            'password' => \Hash::make('Yousef12345$$'),
        ]);
    }
}
