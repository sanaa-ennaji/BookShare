<?php


namespace App\Repositories;

use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function create(array $data)
    {
        return Category::create($data);
    }

    public function update(array $data, int $id)
    {
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
    }

    public function delete(int $id)
    {
        return Category::findOrFail($id)->delete();
    }

    public function getById(int $id)
    {
        return Category::findOrFail($id);
    }

    public function getAll()
    {
        return Category::all();
    }
}

