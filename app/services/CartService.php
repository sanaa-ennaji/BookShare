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

    public function addToCart($costumerId, $bookId, $quantity)
    {
        $book = Book::find($bookId);
        if (!$book) {
            throw new \InvalidArgumentException('Invalid book ID.');
        }
    
        // Validate quantity
        if (!is_numeric($quantity) || $quantity <= 0) {
            throw new \InvalidArgumentException('Quantity must be a positive number.');
        }
        $this->cartRepository->addItemToCart($costumerId, $bookId, $quantity);
    }

    public function getUserCart($costumerId)
    {
        return $this->cartRepository->getUserCart($costumerId);
    }

    
    public function calculateTotalPrice($cartItems)
    {
        $totalPrice = 0;
    
        foreach ($cartItems as $item) {
            $totalPrice += $item->quantity * $item->book->price; 
        }
    
        return $totalPrice;
    }

    public function createOrder($costumerId)
    {
        $totalPrice = $this->cartRepository->getTotalPrice($costumerId);
        return $this->cartRepository->createOrder($costumerId, $totalPrice);
    }

   
    
}