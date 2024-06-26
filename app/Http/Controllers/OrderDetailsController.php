<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Http\Requests\OrderDetailRequest;
use App\ServiceInterface\OrderDetailsServiceInterface;

class OrderDetailsController extends Controller
{

    protected $orderDetailService;

    public function __construct(OrderDetailsServiceInterface $orderDetailService)
    {
        $this->orderDetailService = $orderDetailService;
    }

    // public function store(OrderDetailRequest $request)
    // {
     
    //     $orderId = session('order_id');
    
       
    //     if (!$orderId) {
    //         return response()->json(['error' => 'Order ID not found in session'], 400);
    //     }
    
    //     try {
            
    //         $data = array_merge($request->validated(), ['order_id' => $orderId]);
   
    //         $this->orderDetailService->create($data);
    //             $orderId->status = 'paid';
    //             $orderId->save();
    //         return redirect()->route('orders.show')->with('success', 'successfully');
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 400);
    //     }
    // }


    public function store(OrderDetailRequest $request)
    {
        $orderId = session('order_id');
    
        if (!$orderId) {
            return response()->json(['error' => 'Order ID not found in session'], 400);
        }
    
        try {
           
            $order = Order::findOrFail($orderId);
    
            $order->status = 'paid';
            $order->save();
            $data = array_merge($request->validated(), ['order_id' => $orderId]);
            $this->orderDetailService->create($data);
    
            return redirect()->route('orders.show')->with('success', 'Order status updated successfully');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    

    
    
    
}