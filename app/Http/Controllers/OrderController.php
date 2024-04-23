<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
               
            \Stripe\Stripe::setApiKey(getenv('STRIPE_SECRET_KEY'));
              
                $customerId = $user->costumer->id;
               
               
                $order = $this->orderService->createOrder($customerId);
        
              
                $totalPrice = $this->orderService->calculateTotalPrice($customerId);
        
              
                $charge = \Stripe\Charge::create([
                    'amount' => $totalPrice * 100, 
                    'currency' => 'usd', 
                    'source' => $request->stripeToken,
                    'description' => 'Payment for Order #' . $order->id,
                    'costumer' => $customerId,
                ]);
        
                
                if ($charge->status === 'succeeded') {
                    $order->status = 'Paid';
                    $order->save();
        
                    return response()->json(['message' => 'Order created and paid successfully'], 200);
                } else {
                    DB::rollBack();
                    return response()->json(['error' => 'Payment failed'], 400);
                }
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
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
    



