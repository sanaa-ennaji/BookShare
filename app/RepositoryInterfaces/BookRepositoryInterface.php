<?php
namespace App\RepositoryInterfaces;

interface BookRepositoryInterface
{
    public function create(array $data);

    public function update(array $data, int $id);

    public function delete(int $id);

    public function getById(int $id);

    public function getAll();
}
