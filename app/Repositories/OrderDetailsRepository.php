<?php

namespace App\Repositories;

use App\RepositoryInterfaces\OrderDetailRepositoryInterface;
use App\Models\OrderDetail;

class OrderDetailsRepository implements OrderDetailRepositoryInterface
{
    public function create(array $data)
    {
        return OrderDetail::create($data);
    }
}