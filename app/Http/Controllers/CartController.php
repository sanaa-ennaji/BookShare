<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInterface\CartServiceInterface;

class CartController extends Controller
{
   
    protected $cartService;

    public function __construct(CartServiceInterface $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addToCart(Request $request)
    {
        try {
            $bookId = $request->input('book_id');
            $quantity = $request->input('quantity');

            $this->cartService->addToCart($bookId, $quantity);

            return response()->json(['message' => 'Item added to cart successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
        
    }

    // public function removeFromCart(Request $request)
    // {
    //     $this->cartService->removeFromCart($request->all());
    //     return response()->json(['message' => 'Book removed from cart successfully'], 200);
    // }

    // Add more methods as needed
}

