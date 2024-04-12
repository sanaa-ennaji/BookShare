<?php
// app/Services/CategoryService.php

namespace App\Services;

use App\ServiceInterface\CategoryServiceInterface;
use App\RepositoryInterfaces\CategoryRepositoryInterface;

class CategoryService implements CategoryServiceInterface
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function createCategory(array $data)
    {
        $categoryData = $this->prepareCategoryData($data);
        return $this->categoryRepository->create($categoryData);
    }

    public function updateCategory(array $data, $id)
    {
        $categoryData = $this->prepareCategoryData($data);

        $category = $this->categoryRepository->find($id);
        $this->categoryRepository->update($category, $categoryData);

        return $category;
    }

    public function deleteCategory($id)
    {
        $category = $this->categoryRepository->find($id);
        $this->categoryRepository->delete($category);
    }

    protected function prepareCategoryData(array $data)
    {
        $categoryData = [
            'title' => $data['title'],
        ];
           
        if (isset($data['image'])) {
            $image = $data['image'];
    
            $imagePath = $image->store('public/images'); 
            $categoryData['image'] = $imagePath;
        }
    
        return $categoryData;
    }
    
    public function getCategories()
    {
        return $this->categoryRepository->all();
    }


}
