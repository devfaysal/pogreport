<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->delete();

        $products = [
            [
                'name' => 'Bishal 55',
                'type' => 'Hybrid Maize',
            ],
            [
                'name' => 'Kaveri 54',
                'type' => 'Hybrid Maize',
            ],
            [
                'name' => 'BRRI 28',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 29',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 48',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 58',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 74',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 81',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'BRRI 89',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'Jeerashail',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'Khato Jeerashail',
                'type' => 'Inbred Rice',
            ],
            [
                'name' => 'Heera 1',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Heera 2',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Heera 6',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Heera 9',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Heera 19',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Heera 27',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Surovi 1',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Suborno 3',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Suborno 4',
                'type' => 'Hybrid Rice',
            ],
            [
                'name' => 'Syngenta 1202',
                'type' => 'Hybrid Rice',
            ],
        ];

        DB::table('products')->insert($products);
    }
}
