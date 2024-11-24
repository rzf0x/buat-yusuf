<?php

namespace Database\Seeders;

use App\Models\Complaint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Complaint::insert(
            [
                [
                    'title' => 'Pengduan A',
                    'description' => 'Lorem ipsum dolor sit amet',
                    'status' => 'pending',
                    'image' => 'image.png',
                    'guest_name' => 'yusuf',
                    'guest_email' => 'yusuf@gmail.com',
                    'guest_telp' => '0812871827812',
                    'users_id' => 2
                ],

                [
                    'title' => 'Pengduan B',
                    'description' => 'Lorem ipsum dolor sit amet',
                    'status' => 'proses',
                    'image' => 'image.png',
                    'guest_name' => 'ardi',
                    'guest_email' => 'ardi@gmail.com',
                    'guest_telp' => '0812871827812',
                    'users_id' => 3
                ],

                [
                    'title' => 'Pengduan C',
                    'description' => 'Lorem ipsum dolor sit amet',
                    'status' => 'selesai',
                    'image' => 'image.png',
                    'guest_name' => 'nabil',
                    'guest_email' => 'nabil@gmail.com',
                    'guest_telp' => '0812871827812',
                    'users_id' => 4
                ],
            ]
        );
    }
}
