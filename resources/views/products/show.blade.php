@extends('layouts.app')
@section('title', $product->name)
@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Category: <a href="{{ route('categories.show', $product->category) }}">{{ $product->category->name }}</a></p>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }} | Stock: {{ $product->stock }}</p>
    <a class="btn btn-gray" href="{{ route('products.index') }}">Back</a>
@endsection
