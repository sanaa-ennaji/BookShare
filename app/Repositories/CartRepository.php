<?php

namespace App\Repositories;

use App\Models\Cart;
use App\RepositoryInterface\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{
    public function addItemToCart($bookId, $quantity)
    {
        // Add the item to the cart in the database
        Cart::create([
            'book_id' => $bookId,
            'quantity' => $quantity,
            // You may need to associate the cart with a user or session here
        ]);
    }
}
