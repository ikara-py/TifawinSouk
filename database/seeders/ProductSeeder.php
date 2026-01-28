<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Electronics products (category_id = 1)
        Product::create([
            'nom' => 'iPhone 15 Pro',
            'reference' => 'IP15PRO',
            'description_courte' => 'Latest flagship iPhone',
            'prix' => 999.99,
            'stock' => 50,
            'category_id' => 1,
            'image' => 'iphone15.jpg'
        ]);

        Product::create([
            'nom' => 'Samsung Galaxy S24',
            'reference' => 'SGS24',
            'description_courte' => 'Latest Samsung flagship',
            'prix' => 899.99,
            'stock' => 30,
            'category_id' => 1,
            'image' => 'samsung.jpg'
        ]);

        // Clothing products (category_id = 2)
        Product::create([
            'nom' => 'Nike Air Max',
            'reference' => 'NAM2024',
            'description_courte' => 'Comfortable running shoes',
            'prix' => 129.99,
            'stock' => 100,
            'category_id' => 2,
            'image' => 'nike.jpg'
        ]);
    }
}