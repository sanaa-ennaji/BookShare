<?php


namespace App\ServiceInterface;



interface BookServiceInterface
{
    public function create(array $data);
    public function getAll();
    public function All();
    public function deletebook(int $id);
    public function searchBooks($query);
    public function updatebook(array $data, int $id);

}