<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Add Product</h1>
<form method="post" action="/add-product">
    @csrf
    <label for="name">Product Name:</label>
    <input type="text" name="name" required>
    <label for="price">Product Price:</label>
    <input type="number" name="price" step="0.01" required>
    <label for="quantity">Initial Quantity:</label>
    <input type="number" name="quantity" required>
    <button type="submit">Add Product</button>
</form>
@endsection