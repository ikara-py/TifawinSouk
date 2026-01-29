<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-7xl mx-auto p-4">
    
    <nav class="mb-4 p-2 border">
        <a href="/categories" class="mr-4 underline">Categories</a>
        <a href="/products" class="underline">Products</a>
    </nav>

    <h1 class="text-2xl font-bold mb-4">Categories</h1>

    <a href="/categories/create" class="inline-block px-4 py-2 mb-4 border">Add New</a>

    <table class="w-full border-collapse">
        <thead>
            <tr class="border-b">
                <th class="text-left p-2">ID</th>
                <th class="text-left p-2">Name</th>
                <th class="text-left p-2">Slug</th>
                <th class="text-left p-2">Description</th>
                <th class="text-left p-2">Products</th>
                <th class="text-left p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr class="border-b">
                <td class="p-2">{{ $category->id }}</td>
                <td class="p-2 font-bold">{{ $category->nom }}</td>
                <td class="p-2">{{ $category->slug }}</td>
                <td class="p-2">{{ $category->description }}</td>
                <td class="p-2">{{ $category->products->count() }}</td>
                <td class="p-2">
                    <a href="/categories/{{ $category->id }}/edit" class="px-2 py-1 border mr-2">Edit</a>
                    <form action="/categories/{{ $category->id }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 border">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="p-4 text-center">Empty</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <p class="mt-4">Total: {{ $categories->count() }}</p>

</body>
</html>
