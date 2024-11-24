<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'Admin Website',
                    'email' => 'admin@gmail.com',
                    'password' => bcrypt('password'),
                    'role' => 'admin'
                ],

                [
                    'name' => 'Yusuf',
                    'email' => 'yusuf@gmail.com',
                    'password' => bcrypt('password'),
                    'role' => 'user'
                ],

                [
                    'name' => 'Ardi',
                    'email' => 'ardi@gmail.com',
                    'password' => bcrypt('password'),
                    'role' => 'user'
                ],

                [
                    'name' => 'Nabil',
                    'email' => 'nabill@gmail.com',
                    'password' => bcrypt('password'),
                    'role' => 'user'
                ],
            ]
        );
    }
}
