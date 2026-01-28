<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'nom' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'Electronic devices and gadgets'
        ]);

        Category::create([
            'nom' => 'Clothing',
            'slug' => 'clothing',
            'description' => 'Fashion and apparel'
        ]);

        Category::create([
            'nom' => 'Books',
            'slug' => 'books',
            'description' => 'Books and literature'
        ]);
    }
}