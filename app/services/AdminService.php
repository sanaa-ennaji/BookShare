<?php

namespace App\Services;

use App\RepositoryInterfaces\AdminRepositoryInterface;
use App\ServiceInterface\AdminServiceInterface;


class   AdminService implements AdminServiceInterface
{
    protected $storeRepository;

    public function __construct(AdminRepositoryInterface $storeRepository)
    {
        $this->storeRepository = $storeRepository;
    }

    public function displayStores()
    {
        return $this->storeRepository->displayStores();
    }
}
