<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
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
            $user = auth()->user();
            $costumerId = $user->costumer->id;
            $bookId = $request->input('book_id');
            $quantity = $request->input('quantity');
    
            $this->cartService->addToCart($costumerId, $bookId, $quantity);
    
            return response()->json(['message' => 'Item added to cart successfully'], 200);
            // return view('cart'); 
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    
    public function showCart()
    {
        $user = auth()->user();
        
        if (!$user || !$user->costumer) {
            return redirect()->back()->with('error', 'NOT athorized');
        }
    
        $costumerId = $user->costumer->id;
        $cartItems = $this->cartService->getUserCart($costumerId);
    
        $totalPrice = $this->cartService->calculateTotalPrice($cartItems);
    
        return view('cart', ['cartItems' => $cartItems, 'totalPrice' => $totalPrice]);
    }
    
    
 
    public function removeFromCart(Request $request)
    {
        // $this->cartService->removeFromCart($request->all());
        // return response()->json(['message' => 'Book removed from cart successfully'], 200);
    }

    // Add more methods as needed
}

