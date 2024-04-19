<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItem;

class OrderRepository
{
    public function calculateTotalPrice($userId)
    {
        return Cart::where('user_id', $userId)->sum('total_price');
    }


    public function createOrder($userId)
    {
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalPrice = $this->calculateTotalPrice($userId);

        $order = new Order();
        $order->total_price = $totalPrice;
        $order->status = 'Pending'; 
        $order->user_id = $userId;
        $order->save();
 
        foreach ($cartItems as $cartItem) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->book_id = $cartItem->book_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->unit_price = $cartItem->book->price;
            $orderItem->save();
        }

         Cart::where('user_id', $userId)->delete();

        return $order;
    }
}


    // public function createOrder($userId, $totalPrice)
    // {
    //     $order = new Order();
    //     $order->total_price = $totalPrice;
    //     $order->status = 'Pending'; 
    //     $order->user_id = $userId;
    //     $order->save();
    //     return $order;
    // }


