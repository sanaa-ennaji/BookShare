<?php

namespace App\Http\Controllers;

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
                $userId = auth()->id();
                $this->orderService->calculateTotalPrice($userId ,  $totalPrice);
                $this->orderService->createOrder($userId);
    
                return response()->json(['message' => 'Order created successfully'], 200);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
            }
        }

        public function updateorderStatus (){

      
        }
    }
    



