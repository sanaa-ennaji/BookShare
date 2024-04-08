<?php

namespace App\Services;

use App\RepositoryInterfaces\StoreRepositoryInterface;

class StoreService
{
    public function __construct( protected StoreRepositoryInterface $storeRepository ) {

    }

    public function createStore(array $data, array $StoreData)
    {
        return $this->storeRepository->StoreRegister($data,$StoreData);
    }

}
