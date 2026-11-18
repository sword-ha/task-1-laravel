<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; background: #f4f5f7; color: #222; }
        nav { background: #1f2937; padding: 12px 24px; }
        nav a { color: #fff; margin-right: 18px; text-decoration: none; }
        main { max-width: 900px; margin: 24px auto; background: #fff; padding: 24px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 8px; border-bottom: 1px solid #e5e7eb; }
        label { display: block; margin-top: 12px; font-weight: 600; }
        input, textarea, select { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn { display: inline-block; padding: 6px 12px; background: #2563eb; color: #fff; border: 0; border-radius: 4px; text-decoration: none; cursor: pointer; font-size: 14px; }
        .btn-danger { background: #dc2626; }
        .btn-gray { background: #6b7280; }
        .alert { padding: 10px; background: #d1fae5; margin-bottom: 16px; border-radius: 4px; }
        .error { color: #dc2626; font-size: 13px; }
        form.inline { display: inline; }
        .head { display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body>
<nav>
    <a href="{{ route('users.index') }}">Users</a>
    <a href="{{ route('categories.index') }}">Categories</a>
    <a href="{{ route('products.index') }}">Products</a>
</nav>
<main>
    @if (session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif
    @yield('content')
</main>
</body>
</html>
