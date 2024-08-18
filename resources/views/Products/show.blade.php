@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Price: ${{ $product->price }}</p>
    <p>Details: {{ $product->details }}</p>
    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
    <a href="{{ route('products.index') }}">Back to List</a>
@endsection

