@extends('layouts.app')
@section('title', 'New Category')
@section('content')
    <h1>New Category</h1>
    <form method="POST" action="{{ route('categories.store') }}">
        @include('categories._form')
    </form>
@endsection
