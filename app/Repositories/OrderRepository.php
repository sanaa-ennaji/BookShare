<?php
namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderline;
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

    public function createOrder($customerId)
{
    $cartItems = Cart::where('costumer_id', $customerId)->get();
    $totalPrice = $this->calculateTotalPrice($customerId);

    $order = new Order();
    $order->total_price = $totalPrice;
    $order->status = 'Pending'; 
    $order->costumer_id = $customerId;
    $order->save();

    foreach ($cartItems as $cartItem) {
        $orderline = new Orderline();
        $orderline->order_id = $order->id;
        $orderline->book_id = $cartItem->book_id;
        $orderline->quantity = $cartItem->quantity;
        $orderline->unitprice = $cartItem->book->price;
        $orderline->save();
    }                               

    Cart::where('costumer_id', $customerId)->delete();

    return $order;
}

    // public function createOrder($costumerId , $totalPrice)
    // {
    //     $cartItems = Cart::where('costumer_id', $costumerId)->get();
    //     $totalPrice = $this->calculateTotalPrice($costumerId);

    //     $order = new Order();
    //     $order->total_price = $totalPrice;
    //     $order->status = 'Pending'; 
    //     $order->costumer_id = $costumerId;
    //     $order->save();

    //     foreach ($cartItems as $cartItem) {
    //         $orderline = new Orderline();
    //         $orderline->order_id = $order->id;
    //         $orderline->book_id = $cartItem->book_id;
    //         $orderline->quantity = $cartItem->quantity;
    //         $orderline->unitprice = $cartItem->book->price;
    //         $orderline->save();
         
            
    //     }

    //      Cart::where('costumer_id', $costumerId)->delete();

    //     return $order;
    // }
}



