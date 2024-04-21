<?php

namespace App\RepositoryInterfaces;

interface OrderRepositoryInterface
{
    public function calculateTotalPrice($userId);
    public function createOrder($userId,  $totalPrice);
}