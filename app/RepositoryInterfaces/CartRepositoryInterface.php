<?php

namespace App\RepositoryInterfaces;

interface CartRepositoryInterface
{
    public function addItemToCart($userId, $bookId, $quantity);
    public function getUserCart($userId);
}