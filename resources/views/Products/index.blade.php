@extends('layouts.app')

@section('content')
    <h1>Product List</h1>
    <ul>
        @foreach($products as $product)
            <li>
                <a href="{{ route('products.show', $product->id) }}">{{ $product->name }} - ${{ $product->price }}</a>
            </li>
        @endforeach
    </ul>
@endsection
