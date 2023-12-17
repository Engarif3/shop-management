<!-- resources/views/sales/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
<style>
    .text {
        text-align: center;
        font-weight: bolder;
        color: brown;
        border: 2px seagreen;
    }

    .dashboard {
        display: flex;
        justify-content: center;
    }

    .card {
        display: flex;
        align-items: center;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin: 10px;
        height: 8rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card1 {
        background-color: antiquewhite;
    }

    .card2 {
        background-color: aquamarine;
    }

    .card3 {
        background-color: cadetblue;
    }

    .card4 {
        background-color: indianred;
    }

    h3 {
        margin: 0;
    }
</style>

<h1 class="text">Dashboard</h1>
<div class="dashboard">
    <div class="card card1">
        <h3>Today's Sales: ${{ $todaySales }}</h3>
    </div>
    <div class="card card2">
        <h3>Yesterday's Sales: ${{ $yesterdaySales }}</h3>
    </div>
    <div class="card card3">
        <h3>This Month's Sales: ${{ $thisMonthSales }}</h3>
    </div>
    <div class="card card4">
        <h3>Last Month's Sales: ${{ $lastMonthSales }}</h3>
    </div>
</div>
@endsection