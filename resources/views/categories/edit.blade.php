<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-7xl mx-auto p-4">
    
    <nav class="mb-4 p-2 border">
        <a href="/categories" class="mr-4 underline">Categories</a>
        <a href="/products" class="underline">Products</a>
    </nav>

    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <form action="/categories/{{ $category->id }}" method="POST" class="border p-4">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nom" class="block mb-1">Name:</label>
            <input type="text" name="nom" id="nom" value="{{ $category->nom }}" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="slug" class="block mb-1">Slug:</label>
            <input type="text" name="slug" id="slug" value="{{ $category->slug }}" class="border p-2 w-full" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block mb-1">Description:</label>
            <textarea name="description" id="description" class="border p-2 w-full" rows="3">{{ $category->description }}</textarea>
        </div>

        <button type="submit" class="px-4 py-2 border mr-2">Update</button>
        <a href="/categories" class="px-4 py-2 border inline-block">Cancel</a>
    </form>

</body>
</html>
