<?php

namespace App\Repositories;

use App\Models\Cart;
use App\RepositoryInterfaces\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{
    public function addItemToCart($userId, $bookId, $quantity)
    {
       
        Cart::create([
            'user_id' => $userId, 
            'book_id' => $bookId,
            'quantity' => $quantity,
        ]);
    }
    public function getUserCart($userId)
    {
        return Cart::where('user_id', $userId)->with('book')->get();
    }
}
