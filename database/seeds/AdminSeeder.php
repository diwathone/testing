<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name'  => 'yeyint',
            'email' => 'yeyintkyaw@gmail.com',
            'password'  => Hash::make("123456"),
            'is_super'  => true
        ]);
    }
}