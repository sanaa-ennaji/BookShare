<?php


namespace App\ServiceInterface;



interface BookServiceInterface
{
    public function create(array $data);
    public function getAll();

}