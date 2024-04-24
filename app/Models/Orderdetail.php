<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'adress2',
        'city',
        'state',
        'zipcode',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
