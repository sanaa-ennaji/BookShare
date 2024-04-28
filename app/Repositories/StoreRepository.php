<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Store;
use App\RepositoryInterfaces\StoreRepositoryInterface;


class storeRepository implements StoreRepositoryInterface
{
    public function StoreRegister(array $data, array $storeData)
    {
        $user = User::create($data);
        $storeData['user_id'] = $user->id;
       Store::create($storeData);
        return $user;
    }

    public function updateProfile(array $data, int $id){
        return Store::findOrFail($id)->update($data);
    }

    }