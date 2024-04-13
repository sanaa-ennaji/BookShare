<?php
namespace App\Services;


use App\Repositories\OrderRepository;

class OrderService
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function createOrder($userId)
    {
        $totalPrice = $this->orderRepository->calculateTotalPrice($userId);
        return $this->orderRepository->createOrder($userId, $totalPrice);
    }
}
