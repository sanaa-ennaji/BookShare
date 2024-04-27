<?php

namespace App\RepositoryInterfaces;

interface CartRepositoryInterface
{
    public function addItemToCart($costumerId, $bookId, $quantity);
    public function getUserCart($costumerId);
    public function getTotalPrice($costumerId);
    public function deleteItem(int $id );

}