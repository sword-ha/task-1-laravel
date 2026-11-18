@extends('layouts.app')
@section('title', 'Edit Product')
@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product) }}">
        @method('PUT')
        @include('products._form')
    </form>
@endsection
