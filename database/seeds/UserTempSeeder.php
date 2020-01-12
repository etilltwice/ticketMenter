<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Ａ',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ], [
                'name' => 'B',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ], [
                'name' => 'C',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ], [
                'name' => 'D',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ], [
                'name' => 'E',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ], [
                'name' => 'F',
                'email' => 'fafafa@gmail.com',
                'password' => 'test'
            ]
        ]);
    }
}
