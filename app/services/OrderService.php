<?php
namespace App\Services;

use App\RepositoryInterfaces\OrderRepositoryInterface;
use App\ServiceInterface\OrderServiceInterface;


class OrderService  implements OrderServiceInterface
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
