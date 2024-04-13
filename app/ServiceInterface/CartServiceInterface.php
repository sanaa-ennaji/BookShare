<?php

namespace App\ServiceInterface;

interface CartServiceInterface
{
    public function addToCart($userId, $bookId, $quantity);
    public function getUserCart($userId);
    public function calculateTotalPrice($cartItems);
}