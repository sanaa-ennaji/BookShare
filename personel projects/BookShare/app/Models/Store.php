<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone', 'status','is_validated', 'image', 'cover', 'description', 'city', 'address', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function books()
    {
        return $this->hasMany(Book::class);
    }

    
}
