<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        $totalCategories = Category::count();
        $totalProducts = Product::count();

        return view('test.index', compact('categories', 'totalCategories', 'totalProducts'));
    }

    public function json()
    {
        return response()->json([
            'categories' => Category::with('products')->get(),
            'total_categories' => Category::count(),
            'total_products' => Product::count(),
        ]);
    }
}