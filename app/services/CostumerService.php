<?php

namespace App\Services;

use App\RepositoryInterfaces\CostumerRepositoryInterface;

class UserService
{
    public function __construct( protected CostumerRepositoryInterface  $costumerRepository ) {

    }

    public function create(array $data, array $costumerData)
    {
        return $this->costumerRepository->CostumerRegister($data,$costumerData);
    }

}