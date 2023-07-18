<?php

namespace Database\Seeders;

use App\Models\CustomPattern;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomPatternSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $custom_patterns = [
            [
                'customer_id' => 1,
                'product_id' => 1
            ],
            [
                'customer_id' => 1,
                'product_id' => 2
            ],
            [
                'customer_id' => 1,
                'product_id' => 3
            ],
            [
                'customer_id' => 2,
                'product_id' => 1
            ],
            [
                'customer_id' => 2,
                'product_id' => 2
            ],
        ];

        foreach ($custom_patterns as $key => $value) {
            CustomPattern::create($value);
        }
    }
}
