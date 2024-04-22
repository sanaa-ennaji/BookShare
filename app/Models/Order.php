<?php

namespace App\Models;

use App\Models\Orderline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(Costumer::class, 'costumer_id');
    }

    public function orderItems()
    {
        return $this->hasMany(Orderline::class);
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
