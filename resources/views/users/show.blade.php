@extends('layouts.app')
@section('title', $user->name)
@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Created: {{ $user->created_at }}</p>
    <a class="btn btn-gray" href="{{ route('users.index') }}">Back</a>
@endsection
