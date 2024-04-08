<?php

namespace App\Services;

use App\RepositoryInterfaces\StoreRepositoryInterface;

class CostumerService
{
    public function __construct( protected StoreRepositoryInterface $storeRepository ) {

    }

    public function createStore(array $data, array $StoreData)
    {
        return $this->storeRepository->StoreRegister($data,$StoreData);
    }

}
