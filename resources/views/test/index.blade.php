<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories & Products Test</title>
</head>

<body>
    <h1>Categories & Products Test</h1>
    <p>Testing Laravel Models and Relationships</p>

    <h2>Statistics</h2>
    <p><strong>Total Categories:</strong> {{ $totalCategories }}</p>
    <p><strong>Total Products:</strong> {{ $totalProducts }}</p>

    <hr>

    @foreach($categories as $category)
    <h2>Category: {{ $category->nom }}</h2>
    <p><strong>Slug:</strong> {{ $category->slug }}</p>
    <p><strong>Description:</strong> {{ $category->description }}</p>
    <p><strong>Products Count:</strong> {{ $category->products->count() }}</p>

    @if($category->products->count() > 0)
    <h3>Products:</h3>
    <ul>
        @foreach($category->products as $product)
        <li>
            <h4>{{ $product->nom }}</h4>
            <ul>
                <li><strong>Reference:</strong> {{ $product->reference }}</li>
                <li><strong>Description:</strong> {{ $product->description_courte }}</li>
                <li><strong>Price:</strong> {{ number_format($product->prix, 2) }}€</li>
                <li><strong>Stock:</strong> {{ $product->stock }} units</li>
                <li><strong>Image:</strong> {{ $product->image }}</li>
                <li><strong>Category:</strong> {{ $product->category->nom }}</li>
            </ul>
        </li>
        @endforeach
    </ul>
    @else
    <p><em>No products in this category yet.</em></p>
    @endif

    <hr>
    @endforeach
</body>

</html>