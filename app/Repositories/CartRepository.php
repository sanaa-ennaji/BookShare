<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
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

    public function getTotalPrice($userId)
    {
        return Cart::where('user_id', $userId)->sum('total_price');
    }


    public function createOrder($userId, $totalPrice)
    {
        $order = new Order();
        $order->total_price = $totalPrice;
        $order->status = 'Pending'; 
        $order->user_id = $userId;
        $order->save();
        return $order;
    }
    
}
