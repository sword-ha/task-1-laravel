@extends('layouts.app')
@section('title', 'New User')
@section('content')
    <h1>New User</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @include('users._form')
    </form>
@endsection
