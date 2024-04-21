<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use App\RepositoryInterfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function calculateTotalPrice($costumerId)
    {
        $cartItems = Cart::where('costumer_id', $costumerId)->get();
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $totalPrice += $item->quantity * $item->book->price;
        }

        return $totalPrice;
    }
    public function createOrder($costumerId , $totalPrice)
    {
        $cartItems = Cart::where('costumer_id', $costumerId)->get();
        $totalPrice = $this->calculateTotalPrice($costumerId);

        $order = new Order();
        $order->total_price = $totalPrice;
        $order->status = 'Pending'; 
        $order->costumer_id = $costumerId;
        $order->save();
 
        foreach ($cartItems as $cartItem) {
            $orderItem = new Orderitem();
            $orderItem->order_id = $order->id;
            $orderItem->book_id = $cartItem->book_id;
            $orderItem->quantity = $cartItem->quantity;
            $orderItem->unit_price = $cartItem->book->price;
            $orderItem->save();
        }

         Cart::where('costumer_id', $costumerId)->delete();

        return $order;
    }
}


    // public function createOrder($costumerId, $totalPrice)
    // {
    //     $order = new Order();
    //     $order->total_price = $totalPrice;
    //     $order->status = 'Pending'; 
    //     $order->user_id = $costumerId;
    //     $order->save();
    //     return $order;
    // }


