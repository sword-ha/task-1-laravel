@extends('layouts.app')
@section('title', 'Products')
@section('content')
    <div class="head"><h1>Products</h1><a class="btn" href="{{ route('products.create') }}">New Product</a></div>
    <table>
        <tr><th>ID</th><th>Name</th><th>Category</th><th>Price</th><th>Stock</th><th>Actions</th></tr>
        @forelse ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a class="btn btn-gray" href="{{ route('products.show', $product) }}">View</a>
                    <a class="btn" href="{{ route('products.edit', $product) }}">Edit</a>
                    <form class="inline" method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6">No products yet.</td></tr>
        @endforelse
    </table>
    {{ $products->links() }}
@endsection
