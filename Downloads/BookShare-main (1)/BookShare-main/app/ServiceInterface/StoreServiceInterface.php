<?php


namespace App\ServiceInterface;

interface StoreServiceInterface
{
    public function createStore(array $data, array $StoreData);
    public function updateProfile(array $data, int $id);
  
}