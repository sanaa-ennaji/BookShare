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
                $order = $this->orderService->createOrder(auth()->id());
                return response()->json(['order' => $order], 201);
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
            }

        }

        public function updateorderStatus (){

      
        }
    }
    



