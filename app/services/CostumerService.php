<?php

namespace App\Services;

use App\RepositoryInterfaces\CostumerRepositoryInterface;

class CostumerService
{
    protected $costumerRepository ;

    public function __construct( CostumerRepositoryInterface  $costumerRepository ) {
         $this->costumerRepository = $costumerRepository ;
    }

    public function CostumerRegister (array $data, array $costumerData)
    {
        return $this->costumerRepository->CostumerRegister($data,$costumerData);
    }

}