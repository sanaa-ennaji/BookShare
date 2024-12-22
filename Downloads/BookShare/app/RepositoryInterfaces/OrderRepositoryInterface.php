<?php

namespace App\RepositoryInterfaces;

interface OrderRepositoryInterface
{
    public function calculateTotalPrice($costumerId);
    public function createOrder($costumerId);
}