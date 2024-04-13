<?php

namespace App\RepositoryInterfaces;

interface OrderRepositoryInterface
{
    public function getTotalPrice($userId);
    public function createOrder($userId, $totalPrice);
}