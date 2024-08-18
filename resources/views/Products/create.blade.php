@extends('layouts.app')

@section('content')
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name">

        <label for="price">Price:</label>
        <input type="text" name="price" id="price">

        <label for="details">Details:</label>
        <textarea name="details" id="details"></textarea>

        <label for="image_path">Image Path:</label>
        <input type="text" name="image_path" id="image_path">

        <button type="submit">Create Product</button>
    </form>
@endsection
