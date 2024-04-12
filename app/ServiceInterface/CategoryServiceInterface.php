<?php

namespace App\ServiceInterface;

interface CategoryServiceInterface
{
    public function createCategory(array $data);

    public function updateCategory(array $data, $id);

    public function deleteCategory($id);
    public function getCategories();
}

