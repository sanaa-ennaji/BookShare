<?php

namespace App\Services;

use App\Models\Book;
use App\Models\Order;
use App\ServiceInterface\CartServiceInterface;
use App\RepositoryInterfaces\CartRepositoryInterface;

class CartService implements CartServiceInterface
{
    protected $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function addToCart($userId, $bookId, $quantity)
    {
        $book = Book::find($bookId);
        if (!$book) {
            throw new \InvalidArgumentException('Invalid book ID.');
        }
    
        // Validate quantity
        if (!is_numeric($quantity) || $quantity <= 0) {
            throw new \InvalidArgumentException('Quantity must be a positive number.');
        }
        $this->cartRepository->addItemToCart($userId, $bookId, $quantity);
    }

    public function getUserCart($userId)
    {
        return $this->cartRepository->getUserCart($userId);
    }

    
    public function calculateTotalPrice($cartItems)
    {
        $totalPrice = 0;
    
        foreach ($cartItems as $item) {
            $totalPrice += $item->quantity * $item->book->price; 
        }
    
        return $totalPrice;
    }

    public function createOrder($userId)
    {
        $totalPrice = $this->cartRepository->getTotalPrice($userId);
        return $this->cartRepository->createOrder($userId, $totalPrice);
    }

   
    
}