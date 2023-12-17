<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function dashboard()
    {
        // Implement logic to fetch sales data for the dashboard
        $todaySales = DB::table('sales')->whereDate('sale_date', today())->sum('total_amount');
        $yesterdaySales = DB::table('sales')->whereDate('sale_date', today()->subDay())->sum('total_amount');
        $thisMonthSales = DB::table('sales')->whereMonth('sale_date', now()->month)->sum('total_amount');
        $lastMonthSales = DB::table('sales')->whereMonth('sale_date', now()->subMonth())->sum('total_amount');

        return view('sales.dashboard', compact('todaySales', 'yesterdaySales', 'thisMonthSales', 'lastMonthSales'));
    }

    public function salesHistory()
    {
        // Implement logic to fetch sales history data
        $salesHistory = DB::table('sales')->orderBy('sale_date', 'desc')->get();

        return view('sales.history', compact('salesHistory'));
    }
}
