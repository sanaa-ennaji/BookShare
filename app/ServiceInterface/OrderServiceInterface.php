<?php

namespace App\ServiceInterface;

interface OrderServiceInterface
{
    public function createOrder($userId);
    public function calculateTotalPrice($userId);
}