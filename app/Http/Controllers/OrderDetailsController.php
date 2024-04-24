<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderDetailRequest;

class OrderDetailsController extends Controller
{

    protected $orderDetailService;

    public function __construct(OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderDetailService = $orderDetailService;
    }

    public function store(OrderDetailRequest $request)
    {
     
        $data = $request->validated();

        if ($data->fails()) {
            return response()->json(['error' =>  $data->errors()->first()], 422);
        }

        try {
         
            $this->orderDetailService->createOrderDetail($data);
            return response()->json(['message' => 'Order detail created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}