<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'user_id' => 2,
                'name' => 'Raihan Farras',
                'slug' => 'raihan-farras',
                'phone' => '081333903187',
                'email' => 'rehanfarras76@gmail.com'
            ],
            [
                'user_id' => 3,
                'name' => 'Kennola Irawan',
                'slug' => 'kennola-irawan',
                'phone' => '085274748323',
                'email' => 'kennolairawan76@gmail.com'
            ],
        ];

        foreach ($customers as $key => $value) {
            Customer::create($value);
        }
    }
}
