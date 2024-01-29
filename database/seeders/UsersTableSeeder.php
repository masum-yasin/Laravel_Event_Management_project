<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
// super Admin 
        DB::table('users')->insert([
           
            // Admin
             [
                'name'=>'admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'admin',
                'status'=>'active',
             ],
            //  editor
             [
                'name'=>'editor',
                'username'=>'editor',
                'email'=>'editor@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'editor',
                'status'=>'active',
             ],

            //  User
             [
                'name'=>'user',
                'username'=>'user',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('admin123'),
                'role'=>'user',
                'status'=>'active',]
             ]);
    }
}
