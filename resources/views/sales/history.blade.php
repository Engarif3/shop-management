<!-- resources/views/sales/history.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Sales History</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Quantity Sold</th>
            <th>Total Amount</th>
            <th>Sale Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($salesHistory as $sale)
        <tr>
            <td>{{ $sale->id }}</td>
            <td>{{ $sale->product_name }}</td>
            <td>{{ $sale->quantity_sold }}</td>
            <td>${{ $sale->total_amount }}</td>
            <td>{{ $sale->sale_date }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection