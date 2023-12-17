<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Clear existing data from the table
        DB::table('sales')->truncate();

        // Insert dummy sales data
        $salesData = [
            ['product_name' => 'Product A', 'quantity_sold' => 10, 'total_amount' => 150.00, 'sale_date' => now()->toDateTimeString()],
            ['product_name' => 'Product B', 'quantity_sold' => 5, 'total_amount' => 75.00, 'sale_date' => now()->subDays(1)->toDateTimeString()],
            // Add more dummy data as needed
        ];

        DB::table('sales')->insert($salesData);
    }
}
