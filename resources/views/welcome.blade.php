<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - TifawinSouk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-7xl mx-auto p-4">
    <main class="text-center mt-20">
        <h1 class="text-6xl font-bold mb-4">Welcome to <span class="text-orange-600">TifawinSouk</span> </h1>
        
        <div class="space-x-4">
            <a href="/categories" class="inline-block px-6 py-3 bg-blue-900 text-white border rounded hover:bg-blue-950">Manage Categories</a>
            <a href="/products" class="inline-block px-6 py-3 bg-orange-600 text-white font-bold rounded hover:bg-orange-700">Manage Products</a>
        </div>
    </main>
</body>
</html>