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
    
}
