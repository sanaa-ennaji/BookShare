<?php

namespace App\ServiceInterface;

interface CartServiceInterface
{
    public function addToCart($costumerId, $bookId, $quantity);
    public function getUserCart($costumerId);
    public function calculateTotalPrice($cartItems);
    public function deleteItem(int $id );
}