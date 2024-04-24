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

        if ($data->fails()) {
            return response()->json(['error' =>  $data->errors()->first()], 422);
        }

        try {
         
            $this->orderDetailService->create($data);
            return response()->json(['message' => 'Order detail created successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}