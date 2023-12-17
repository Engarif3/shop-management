@extends('layouts.app')

@section('content')
<h1>Product List</h1>

@if(count($products) > 0)
<ul>
    @foreach($products as $product)
    <li>{{ $product->name }} - ${{ $product->price }} - Quantity: {{ $product->quantity }}</li>
    @endforeach
</ul>
@else
<p>No products available.</p>
@endif
@endsection