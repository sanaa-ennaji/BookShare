<?php


namespace App\ServiceInterface;

interface CategoryServiceInterface
{
    public function createCategory(array $data, UploadedFile $image = null): Category;
    public function findCategoryById(int $id): ?Category;
    public function getAllCategories(): array;
    public function updateCategory(Category $category, array $data, UploadedFile $image = null): Category;
    public function deleteCategory(Category $category): void;
}
