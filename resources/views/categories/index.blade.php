@extends('layouts.app')
@section('title', 'Categories')
@section('content')
    <div class="head"><h1>Categories</h1><a class="btn" href="{{ route('categories.create') }}">New Category</a></div>
    <table>
        <tr><th>ID</th><th>Name</th><th>Products</th><th>Actions</th></tr>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products_count }}</td>
                <td>
                    <a class="btn btn-gray" href="{{ route('categories.show', $category) }}">View</a>
                    <a class="btn" href="{{ route('categories.edit', $category) }}">Edit</a>
                    <form class="inline" method="POST" action="{{ route('categories.destroy', $category) }}" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="4">No categories yet.</td></tr>
        @endforelse
    </table>
    {{ $categories->links() }}
@endsection
