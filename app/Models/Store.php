<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'status', 'image', 'cover', 'description', 'city', 'address', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
