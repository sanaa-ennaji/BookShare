<?php

namespace App\Repositories;

use App\Models\Orderdetail;
use App\RepositoryInterfaces\OrderDetailsRepositoryInterface;



class OrderDetailsRepository implements  OrderDetailsRepositoryInterface
{
    public function create(array $data)
    {
        return Orderdetail::create($data);
    }
}