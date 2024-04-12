<?php


namespace App\RepositoryInterfaces;

use App\Models\Category;

interface CategoryRepositoryInterface
{
    public function create(array $data);

    public function update(Category $category, array $data);

    public function delete(Category $category);
    public function find(int $id);
    public function all();
}
