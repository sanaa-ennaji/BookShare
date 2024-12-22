<?php

namespace App\ServiceInterface;

interface OrderServiceInterface
{
    public function createOrder($costumerId);
    public function calculateTotalPrice($costumerId);
}