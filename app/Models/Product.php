<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nom', 'reference', 'description_courte', 'prix', 'stock', 'category_id', 'image'];
}
