<?php

namespace App\Services;


use App\ServiceInterface\StoreServiceInterface;
use App\RepositoryInterfaces\StoreRepositoryInterface;

class StoreService implements StoreServiceInterface
{
    public function __construct( protected StoreRepositoryInterface $storeRepository ) {

    }

    public function createStore(array $data, array $StoreData)
    {
        return $this->storeRepository->StoreRegister($data,$StoreData);
    }

    public function updateProfile(array $data, int $id){
        return $this->storeRepository->updateProfile( $data, $id);

    }

}
