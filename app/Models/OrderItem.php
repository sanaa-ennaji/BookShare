<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected  $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'uniprice',
    ];
    public function book(){
        return $this->blengsTo(Book::class);
    }

    public function order(){
        return $this->blengsTo(order::class);
    }

}


   