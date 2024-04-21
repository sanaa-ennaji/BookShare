<?php

namespace App\Services;

use App\ServiceInterface\OrderServiceInterface;
use App\RepositoryInterfaces\OrderRepositoryInterface;

class OrderService implements OrderServiceInterface
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function createOrder($userId)
    {
        $totalPrice = $this->orderRepository->calculateTotalPrice($userId);
        return $this->orderRepository->createOrder($userId, $totalPrice);
    }

    public function calculateTotalPrice($userId)
    {
        return $this->orderRepository->calculateTotalPrice($userId);
    }
}
