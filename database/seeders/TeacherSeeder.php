<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('teachers')->insert([
            'name'=>'Yousef Elkept',
            'email' => 'Yalkept@gmail.com',
            'password' => \Hash::make('Yousef12345$$'),
        ]);
        \DB::table('teachers')->insert([
            'name'=>'moathpopp',
            'email' => 'moathpopp@gmail.com',
            'password' => \Hash::make('PP12345679$#'),
        ]);
        \DB::table('teachers')->insert([
            'name'=>'abed alqebt',
            'email' => 'abed.alqebt@gmail.com',
            'password' => \Hash::make('abed123456789$$'),
        ]);
        \DB::table('teachers')->insert([
            'name'=>'yousef loai alkept',
            'email' => 'yousefloaialkept@gmail.com',
            'password' => \Hash::make('Yousef12345$$'),
        ]);
        \DB::table('teachers')->insert([
            'name'=>'Elsayed Rabeaa',
            'email' => 'micro.elsayed219@gmail.com',
            'password' => \Hash::make('10203040s+hny'),
        ]);
    }
}
