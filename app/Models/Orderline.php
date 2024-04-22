<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    use HasFactory;
    protected  $fillable = [
        'order_id',
        'book_id',
        'quantity',
        'unitprice',
    ];
    public function book(){
        return $this->belongsTo(Book::class); 
    }
    
    public function order(){
        return $this->belongsTo(Order::class); 
    }
    

}


   