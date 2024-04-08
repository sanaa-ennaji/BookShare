<?php

namespace App\Services;

use App\Repositories\BookRepositoryInterface;

class BookService {
    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    public function create(array $data) {
        
        return $this->bookRepository->create($data);
    }
}
