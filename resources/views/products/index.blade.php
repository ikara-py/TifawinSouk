<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-7xl mx-auto p-4">
    
    <nav class="mb-4 p-2 border">
        <a href="/categories" class="mr-4 underline">Categories</a>
        <a href="/products" class="underline">Products</a>
    </nav>

    <h1 class="text-2xl font-bold mb-4">Products</h1>

    <a href="/products/create" class="inline-block px-4 py-2 mb-4 border">Add New</a>

    <table class="w-full border-collapse">
        <thead>
            <tr class="border-b">
                <th class="text-left p-2">ID</th>
                <th class="text-left p-2">Image</th>
                <th class="text-left p-2">Name</th>
                <th class="text-left p-2">Reference</th>
                <th class="text-left p-2">Category</th>
                <th class="text-left p-2">Price</th>
                <th class="text-left p-2">Stock</th>
                <th class="text-left p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr class="border-b">
                <td class="p-2">{{ $product->id }}</td>
                <td class="p-2">
                    @if($product->image)
                    <img src="{{ $product->image }}" alt="{{ $product->nom }}" class="w-16 h-16 object-cover border">
                    @else
                    <div class="w-16 h-16 border flex items-center justify-center text-xs">No image</div>
                    @endif
                </td>
                <td class="p-2">
                    <div class="font-bold">{{ $product->nom }}</div>
                    <div class="text-sm">{{ $product->description_courte }}</div>
                </td>
                <td class="p-2">{{ $product->reference }}</td>
                <td class="p-2">{{ $product->category->nom}}</td>
                <td class="p-2">{{ number_format($product->prix, 2) }}MAD</td>
                <td class="p-2">{{ $product->stock }} units</td>
                <td class="p-2">
                    <a href="/products/{{ $product->id }}/edit" class="px-2 py-1 border mr-2">Edit</a>
                    <form action="/products/{{ $product->id }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 border">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="p-4 text-center">Empty</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <p class="mt-4">Total: {{ $products->count() }}</p>

</body>
</html>
