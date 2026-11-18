@extends('layouts.app')
@section('title', 'New Product')
@section('content')
    <h1>New Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @include('products._form')
    </form>
@endsection
