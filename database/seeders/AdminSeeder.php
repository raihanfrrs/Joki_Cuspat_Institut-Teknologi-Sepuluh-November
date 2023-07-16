<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'user_id' => 1,
                'name' => 'Ferry Irawan',
                'slug' => 'ferry-irawan',
                'phone' => 'ferryirawan76@gmail.com',
                'email' => '08123747483'
            ],
        ];

        foreach ($admins as $key => $value) {
            Admin::create($value);
        }
    }
}
