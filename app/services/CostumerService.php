<?php

namespace App\Services;

use App\RepositoryInterfaces\CostumerRepositoryInterface;

class CostumerService
{
    public function __construct( protected CostumerRepositoryInterface  $costumerRepository ) {

    }

    public function CostumerRegister (array $data, array $costumerData)
    {
        return $this->costumerRepository->CostumerRegister($data,$costumerData);
    }

}