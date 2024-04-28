<?php


namespace App\RepositoryInterfaces;

interface StoreRepositoryInterface
{
    public function StoreRegister(array $data, array $StoreData);
    public function updateProfile(array $data, int $id);
  
}