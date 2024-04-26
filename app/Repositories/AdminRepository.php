<?php
namespace App\Repositories;


use App\Models\Store;
use App\RepositoryInterfaces\AdminRepositoryInterface;




class AdminRepository implements AdminRepositoryInterface {


    public function displayStores(){
        return Store::where('is_validated', 'accepted')->get();
    }
  
}