<?php

namespace App\Services;

use App\ServiceInterface\BookServiceInterface;
use App\RepositoryInterfaces\BookRepositoryInterface;

class BookService implements BookServiceInterface {
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    public function create (array $data) {
       
        
        return $this->bookRepository->create($data);
    }


    public function getAll()
    {
        return $this->bookRepository->getAll();
    }
    
    public function deletebook(int $id){
        return $this->bookRepository->deletebook($id);
    }

    
    public function updatebook(array $data, int $id){
        return $this->bookRepository->updatebook( $data, $id);

    }

    public function searchBooks($query)
    {
        return $this->bookRepository->search($query);
    }

    
}

