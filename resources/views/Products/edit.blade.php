@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}">

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}">

        <label for="details">Details:</label>
        <textarea name="details" id="details">{{ $product->details }}</textarea>

        <label for="image_path">Image Path:</label>
        <input type="text" name="image_path" id="image_path" value="{{ $product->image_path }}">

        <button type="submit">Update Product</button>
    </form>
@endsection
