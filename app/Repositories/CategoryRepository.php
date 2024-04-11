<?php


namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function create(array $data): Category
    {
        return Category::create($data);
    }

    public function findById(int $id): ?Category
    {
        return Category::findOrFail($id);
    }

    public function all(): array
    {
        return Category::all()->toArray();
    }

    public function update(Category $category, array $data): Category
    {
        $category->update($data);
        return $category;
    }

    public function delete(Category $category): void
    {
        $category->delete();
    }

    public function getById(int $id)
    {
        return Category::findOrFail($id);
    }
}
