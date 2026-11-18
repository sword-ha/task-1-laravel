@extends('layouts.app')
@section('title', $category->name)
@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>
    <h3>Products</h3>
    <ul>
        @forelse ($category->products as $product)
            <li><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a> - {{ $product->price }}</li>
        @empty
            <li>No products.</li>
        @endforelse
    </ul>
    <a class="btn btn-gray" href="{{ route('categories.index') }}">Back</a>
@endsection
