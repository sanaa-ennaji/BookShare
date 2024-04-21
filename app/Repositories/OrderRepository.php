<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\RepositoryInterfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function calculateTotalPrice($userId)
    {
        $cartItems = Cart::where('user_id', $userId)->get();
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $totalPrice += $item->quantity * $item->book->price;
        }

        return $totalPrice;
    }
    public function createOrder($userId , $totalPrice)
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


