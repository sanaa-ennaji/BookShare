<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'image', 'author', 'ISBN', 'quantity', 'status', 'description', 'lang', 'price', 'store_id', 'categorie_id', 'rating'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class , 'store_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }
}
