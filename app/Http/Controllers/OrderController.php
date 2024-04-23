<?php

namespace App\Http\Controllers;
use Stripe\Stripe;
use App\Models\Cart;
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


       

        public function createOrder(Request $request)
        {
            try {
                $user = auth()->user();
                $customerId = $user->costumer->id;
                $order = $this->orderService->createOrder($customerId);
                $totalPrice = $this->orderService->calculateTotalPrice($customerId);
                
                // Set your Stripe API key
                Stripe::setApiKey('k_test_51P6xhJEp1ITeo4C2L5SKGC2uHqJrsjUEUbMiKJI5lz0K34ospdtyAhJ6pTY9XGTcbA52FJx2nxLgK6PR1bLXVBKp00xkC1xZdz');
               
                
                // Calculate the unit amount in cents
                $unitAmount = $totalPrice * 100;
        
                // Create line items for the session
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
        
                // Create a session for checkout
                $session = Session::create([
                    'payment_method_types' => ['card'],
                    'line_items' => $lineItems,
                    'mode' => 'payment',
                    // 'success_url' => route('payment.success'), 
                    // 'cancel_url' => route('payment.cancel'), 
                ]);
        
                // Redirect the user to the session URL
                return redirect($session->url);
            } catch (\Exception $e) {
                // Handle any exceptions
                return response()->json(['error' => $e->getMessage()]);
            }
        }
        

        // public function createOrder(Request $request)
        // {

        //     try {
        //         $user = auth()->user();
        //         \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));
        //         $costumerId = $user->costumer->id;
        //         $this->orderService->calculateTotalPrice($costumerId);
        //         $this->orderService->createOrder($costumerId);
    
        //         return response()->json(['message' => 'Order created successfully'], 200);
        //     } catch (\Exception $e) {
        //         return response()->json(['error' => $e->getMessage()], 400);
        //     }
        // }

    

        
       
    }
    



