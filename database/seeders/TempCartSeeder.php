<?php

namespace Database\Seeders;

use App\Models\TempCart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TempCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temp_carts = [
            [
                'customer_id' => 1,
                'custom_pattern_id' => 1,
                'qty' => 5
            ],
            [
                'customer_id' => 1,
                'custom_pattern_id' => 2,
                'qty' => 10
            ],
            [
                'customer_id' => 1,
                'custom_pattern_id' => 3,
                'qty' => 5
            ],
            [
                'customer_id' => 2,
                'custom_pattern_id' => 4,
                'qty' => 10
            ],
            [
                'customer_id' => 2,
                'custom_pattern_id' => 5,
                'qty' => 5
            ],
        ];

        foreach ($temp_carts as $key => $value) {
            TempCart::create($value);
        }
    }
}
