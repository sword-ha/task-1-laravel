@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <div class="head"><h1>Users</h1><a class="btn" href="{{ route('users.create') }}">New User</a></div>
    <table>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-gray" href="{{ route('users.show', $user) }}">View</a>
                    <a class="btn" href="{{ route('users.edit', $user) }}">Edit</a>
                    <form class="inline" method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No users yet.</td></tr>
        @endforelse
    </table>
    {{ $users->links() }}
@endsection
