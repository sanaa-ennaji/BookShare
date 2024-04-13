<?php

namespace App\RepositoryInterface;

interface CartRepositoryInterface
{
    public function addItemToCart($bookId, $quantity);
}