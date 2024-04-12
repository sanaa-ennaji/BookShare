<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
   
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addToCart(Request $request)
    {
        $this->cartService->addToCart($request->all());
        return response()->json(['message' => 'Book added to cart successfully'], 201);
    }

    public function removeFromCart(Request $request)
    {
        $this->cartService->removeFromCart($request->all());
        return response()->json(['message' => 'Book removed from cart successfully'], 200);
    }

    // Add more methods as needed
}

