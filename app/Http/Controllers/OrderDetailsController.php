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
        
        $data = $request->validated();
    
        $orderId = $request->input('order_id');
    
        $data['order_id'] = $orderId;
    
        try {
            $this->orderDetailService->create($data);
            return response()->json(['message' => 'Order detail created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    
    
}