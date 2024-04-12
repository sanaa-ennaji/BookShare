<?php
namespace App\Repositories;

use App\Models\Book;
use App\RepositoryInterfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    public function create(array $data)
    {
        $data['store_id'] = Book::store()->id();
        return Book::create($data);
    }

    public function update(array $data, int $id)
    {
      
        return Book::findOrFail($id)->update($data);
    }

    public function delete(int $id)
    {
        return Book::findOrFail($id)->delete();
    }

    public function getById(int $id)
    {
        return Book::findOrFail($id);
    }

    public function getAll()
    {
        return Book::all();
    }
}



