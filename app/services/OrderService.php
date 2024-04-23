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

    // public function createOrder($costumerId)
    // {
    //     $totalPrice = $this->orderRepository->calculateTotalPrice($costumerId);
    //     return $this->orderRepository->createOrder($costumerId, $totalPrice);
    // }
    public function createOrder($costumerId)
    {
        $this->orderRepository->calculateTotalPrice($costumerId);
        return $this->orderRepository->createOrder($costumerId);
    }


    public function calculateTotalPrice($costumerId)
    {
        return $this->orderRepository->calculateTotalPrice($costumerId);
    }
}
