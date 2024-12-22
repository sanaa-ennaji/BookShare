<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['costumer_id', 'book_id', 'quantity'];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
