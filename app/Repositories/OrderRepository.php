<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\CartItem;

class OrderRepository
{
    public function calculateTotalPrice($userId)
    {
        return Cart::where('user_id', $userId)->sum('total_price');
    }

    public function createOrder($userId, $totalPrice)
    {
        $order = new Order();
        $order->total_price = $totalPrice;
        $order->status = 'Pending'; // or 'Processing' depending on your requirements
        $order->user_id = $userId;
        $order->save();
        return $order;
    }
}

