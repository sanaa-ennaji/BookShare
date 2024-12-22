<?php

namespace App\Services;

use App\ServiceInterface\CostumerServiceInterface;
use App\RepositoryInterfaces\CostumerRepositoryInterface;

class CostumerService implements CostumerServiceInterface
{
    protected $costumerRepository;

    public function __construct(CostumerRepositoryInterface $costumerRepository)
    {
        $this->costumerRepository = $costumerRepository;
    }

    public function create(array $data, array $costumerData)
    {
        return $this->costumerRepository->costumerRegister($data, $costumerData);
    } 
}
