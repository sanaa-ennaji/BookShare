<?php

namespace App\Services;

use App\Repositories\CategoryRepositoryInterface;
use App\ServiceInterface\CategoryServiceInterface;

class CostumerService implements CategoryServiceInterface
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data)
    {
        return $this->categoryRepository->createCategory($data);
    } 
}
