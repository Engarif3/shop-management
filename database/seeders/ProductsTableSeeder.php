<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing data from the table
        DB::table('products')->truncate();

        // Insert dummy data
        DB::table('products')->insert([
            [
                'name' => 'Product A',
                'price' => 20.99,
                'quantity' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product B',
                'price' => 30.50,
                'quantity' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ]);
    }
}
