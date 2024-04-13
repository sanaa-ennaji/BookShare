<?php
namespace App\Services;

use App\RepositoryInterfaces\OrderRepositoryInterface;


class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function createOrder($userId)
    {
        $totalPrice = $this->orderRepository->getTotalPrice($userId);
        return $this->orderRepository->createOrder($userId, $totalPrice);
    }
}
