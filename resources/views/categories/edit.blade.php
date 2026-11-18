@extends('layouts.app')
@section('title', 'Edit Category')
@section('content')
    <h1>Edit Category</h1>
    <form method="POST" action="{{ route('categories.update', $category) }}">
        @method('PUT')
        @include('categories._form')
    </form>
@endsection
