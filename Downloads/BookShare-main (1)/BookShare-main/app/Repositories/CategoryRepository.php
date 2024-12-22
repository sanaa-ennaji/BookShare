<?php


namespace App\Repositories;

use App\Models\Category;
use App\RepositoryInterfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function create(array $data)
    {
        return Category::create($data);
    }
    
    public function update(Category $category, array $data)
    {
        $category->update($data);
    }

    public function delete(Category $category)
    {
        $category->delete();
    }
    public function find(int $id)
    {
        return Category::findOrFail($id);
    }

    public function all()
    {
        return Category::all();
    }
   
}
