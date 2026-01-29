<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-7xl mx-auto p-4">
    
    <nav class="mb-4 p-2 border">
        <a href="/categories" class="mr-4 underline">Categories</a>
        <a href="/products" class="underline">Products</a>
    </nav>

    <h1 class="text-2xl font-bold mb-4">Create Product</h1>

    <form action="/products" method="POST" class="border p-4">
        @csrf
        
        <div class="mb-4">
            <label for="nom" class="block mb-1">Name:</label>
            <input type="text" name="nom" id="nom" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="reference" class="block mb-1">Reference:</label>
            <input type="text" name="reference" id="reference" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="description_courte" class="block mb-1">Description:</label>
            <textarea name="description_courte" id="description_courte" class="border p-2 w-full" rows="3"></textarea>
        </div>

        <div class="mb-4">
            <label for="prix" class="block mb-1">Price:</label>
            <input type="number" step="0.01" name="prix" id="prix" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="stock" class="block mb-1">Stock:</label>
            <input type="number" name="stock" id="stock" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="category_id" class="block mb-1">Category:</label>
            <select name="category_id" id="category_id" class="border p-2 w-full" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="image" class="block mb-1">Image URL:</label>
            <input type="url" name="image" id="image" class="border p-2 w-full" placeholder="https://example.com/image.jpg">
        </div>

        <button type="submit" class="px-4 py-2 border mr-2">Save</button>
        <a href="/products" class="px-4 py-2 border inline-block">Cancel</a>
    </form>

</body>
</html>
