<?php

namespace App\Services;


use App\Models\OrderDetail;
use App\RepositoryInterfaces\OrderDetailsRepositoryInterface;
use App\ServiceInterface\OrderDetailsServiceInterface;

class OrderDetailsService implements  OrderDetailsServiceInterface
{

    protected $orderDetailsRepository;

    public function __construct(OrderDetailsRepositoryInterface $orderDetailsRepository)
    {
        $this->orderDetailsRepository = $orderDetailsRepository;
    }
    public function create(array $data){
        
        return $this->orderDetailsRepository->create($data);
    }
}
