<?php

namespace App\Repositories;

use App\Models\Cart;

use App\RepositoryInterfaces\CartRepositoryInterface;

class CartRepository implements CartRepositoryInterface
{
    public function addItemToCart($costumerId, $bookId, $quantity)
    {
       
        Cart::create([
            'costumer_id' => $costumerId, 
            'book_id' => $bookId,
            'quantity' => $quantity,
        ]);
    }
    public function getUserCart($costumerId)
    {
        return Cart::where('costumer_id', $costumerId)->with('book')->get();
    }

    public function getTotalPrice($costumerId)
    {
        return Cart::where('costumer_id', $costumerId)->sum('total_price');
    }

    public function deleteItem(int $id )
    {
        return Cart::findOrFail($id)->delete();
    }
 
    
}
