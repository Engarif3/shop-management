@extends('layouts.app')

@section('content')
<h1>Change Price</h1>
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
            <th>Current Price</th>
            <th>New Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <form method="POST" action="{{ route('change-price', ['id' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="number" name="new_price" min="0.01" step="0.01" required>
                    <button type="submit">Change Price</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection