<?php
namespace App\Repositories;

use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{
    public function create(array $data)
    {
        return Book::create($data);
    }

    public function update(array $data, int $id)
    {
        $book = Book::findOrFail($id);
        $book->update($data);
        return $book;
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
