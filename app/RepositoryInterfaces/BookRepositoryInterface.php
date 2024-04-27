<?php
namespace App\RepositoryInterfaces;

interface BookRepositoryInterface
{
    public function create(array $data);

   
    public function updatebook(array $data, int $id);

    public function deletebook(int $id);

    public function getById(int $id);

    public function getAll();
    public function search($query);
}
