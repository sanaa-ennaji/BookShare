<?php

namespace App\ServiceInterface;

use App\RepositoryInterface\CartRepositoryInterface;

class CartService implements CartServiceInterface
{
    protected $cartRepository;

    public function __construct(CartRepositoryInterface $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function addToCart($bookId, $quantity)
    {
        // You can add validation logic here if needed
        
        // Call the repository to add the item to the cart
        $this->cartRepository->addItemToCart($bookId, $quantity);
    }
}