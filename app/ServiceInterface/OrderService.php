<?php

namespace App\ServiceInterface;

interface CartServiceInterface
{
    public function createOrder($userId);
}