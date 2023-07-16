<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'ferry123',
                'password' => bcrypt('test123'),
                'level' => 'admin'
            ],
            [
                'username' => 'raihan123',
                'password' => bcrypt('test123'),
                'level' => 'customer'
            ]
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
