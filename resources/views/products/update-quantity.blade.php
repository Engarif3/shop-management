@extends('layouts.app')

@section('content')
<h1>Update Quantity</h1>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
                <form method="POST" action="{{ route('update-quantity', ['id' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="number" name="sold_quantity" value="1" min="1">
                    <button type="submit">Sold</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection