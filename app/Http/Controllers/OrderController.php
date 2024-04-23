<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Orderline;
use Illuminate\Http\Request;
use App\ServiceInterface\OrderServiceInterface;

class OrderController extends Controller
{

        protected $orderService;
    
        public function __construct(OrderServiceInterface $orderService)
        {
            $this->orderService = $orderService;
        }
        public function createOrder(Request $request)
        {

            try {
                $user = auth()->user();
                $costumerId = $user->costumer->id;
                $this->orderService->calculateTotalPrice($costumerId);
                $this->orderService->createOrder($costumerId);
    
                return response()->json(['message' => 'Order created successfully'], 200);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
            }
        }

    

        
        public function checkout(Request $request)
        {
          
            $user = $request->user();
    
            \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));
    
            [$products, $cartItems] = Cart::getProductsAndCartItems();
    
            $orderItems = [];
            $lineItems = [];
            $totalPrice = 0;
            foreach ($products as $product) {
                $quantity = $cartItems[$product->id]['quantity'];
                $totalPrice += $product->price * $quantity;
                $lineItems[] = [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $product->title,
                        ],
                        'unit_amount' => $product->price * 100,
                    ],
                    'quantity' => $quantity,
                ];
                $orderItems[] = [
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'unit_price' => $product->price
                ];
            }
   
  
    
            $session = \Stripe\Checkout\Session::create([
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' => route('checkout.success', [], true) . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('checkout.failure', [], true),
            ]);
    
           
            $orderData = [
                'total_price' => $totalPrice,
                'status' => OrderStatus::Unpaid,
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ];
            $order = Order::create($orderData);
    
            // Create Order Items
            foreach ($orderItems as $orderItem) {
                $orderItem['order_id'] = $order->id;
                Orderline::create($orderItem);
            }
    
          
            $paymentData = [
                'order_id' => $order->id,
                'amount' => $totalPrice,
                'status' => PaymentStatus::Pending,
                'type' => 'cc',
                'created_by' => $user->id,
                'updated_by' => $user->id,
                'session_id' => $session->id
            ];
            Payment::create($paymentData);
    
            CartItem::where(['user_id' => $user->id])->delete();
    
            return redirect($session->url);
        }
    }
    



