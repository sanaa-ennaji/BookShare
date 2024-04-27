<?php
namespace App\Repositories;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Book;
use App\RepositoryInterfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface
{
    public function create(array $data)
    {
        $store = auth()->user()->store()->first();
    
        if (!$store) {
            return null;
        }
        $data['store_id'] = $store->id;

        return Book::create($data);
    }
    

    public function updatebook(array $data, int $id)
    {
      
        return Book::findOrFail($id)->update($data);
    }

    public function deletebook(int $id)
    {
        return Book::findOrFail($id)->delete();
    }

    public function getById(int $id)
    {
        return Book::findOrFail($id);
    }
    public function getAll($perPage = 6)
{
  
    $books = Book::paginate($perPage);

    return $books;
}

    // public function getAll()
    // {
    //     return Book::all();
    // }
}



