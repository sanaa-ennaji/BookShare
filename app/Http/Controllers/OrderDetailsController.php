<?php

namespace App\Http\Controllers;


use App\Http\Requests\OrderDetailRequest;
use App\ServiceInterface\OrderDetailsServiceInterface;

class OrderDetailsController extends Controller
{

    protected $orderDetailService;

    public function __construct(OrderDetailsServiceInterface $orderDetailService)
    {
        $this->orderDetailService = $orderDetailService;
    }

    public function store(OrderDetailRequest $request)
    {
     
        $orderId = session('order_id');
    
       
        if (!$orderId) {
            return response()->json(['error' => 'Order ID not found in session'], 400);
        }
    
        try {
            
            $data = array_merge($request->validated(), ['order_id' => $orderId]);
   
            $this->orderDetailService->create($data);
    
            return response()->json(['message' => 'Order detail created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    
    
    
}