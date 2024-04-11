<?php


namespace App\Repositories;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function create(array $data): Category;
    public function findById(int $id): ?Category;
    public function all(): array;
    public function update(Category $category, array $data): Category;
    public function delete(Category $category): void;
    public function getById(int $id);

}
