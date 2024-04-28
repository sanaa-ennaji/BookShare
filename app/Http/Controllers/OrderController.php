<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderline;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\DB;
use App\ServiceInterface\OrderServiceInterface;

class OrderController extends Controller
{

        protected $orderService;
    
        public function __construct(OrderServiceInterface $orderService)
        {
            $this->orderService = $orderService;
        }

     
        public function costumerOrders (){
            $user = auth()->user();
            $costumerId = $user->costumer->id;
            $orders = Order::where('costumer_id', $costumerId)->get();
            return view('client.orders', ['orders' => $orders]);
}
    

public function storeOrders()
{
    $user = auth()->user();
    $store = $user->store;

    $orders = Order::whereHas('orderItems', function ($query) use ($store) {
        $query->whereIn('book_id', $store->books->pluck('id'));
    })->with('costumer.user')->get();

    return view('stores\Storeorders', ['orders' => $orders]);
}


        
        public function createOrder(Request $request)
{
    try {
        $user = auth()->user();
        $customerId = $user->costumer->id;
        $order = $this->orderService->createOrder($customerId);
        $totalPrice = $this->orderService->calculateTotalPrice($customerId);
       

        $unitAmount = $totalPrice * 100;

        Cart::where('costumer_id', $customerId)->delete();
        $lineItems = [
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Order #' . $order->id,
                        'description' => 'Payment for Order #' . $order->id,
                    ],
                    'unit_amount' => $unitAmount,
                ],
                'quantity' => 1,
            ],
        ];

      
        Stripe::setApiKey('sk_test_51P6xhJEp1ITeo4C2L5SKGC2uHqJrsjUEUbMiKJI5lz0K34ospdtyAhJ6pTY9XGTcbA52FJx2nxLgK6PR1bLXVBKp00xkC1xZdz');
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('payment.success'), 
            'cancel_url' => route('cart.show'), 
        ]);

        
        session(['order_id' => $order->id]);

    
        return redirect($session->url);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()]);
    }
}


        

        }

       
    

        
       
    
    



