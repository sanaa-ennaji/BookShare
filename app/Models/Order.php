<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'status',
        'created_by',
        'updated_by',
        'costumer_id',
    ];


public function costumer()
    {
        return $this->belongsTo(Costumer::class , 'costumer_id');
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function details()
    {
        return $this->hasOne(OrderDetail::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
