<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Costumer;
use App\RepositoryInterfaces\CostumerRepositoryInterface;

class CostumerRepository implements CostumerRepositoryInterface
{
    public function CostumerRegister(array $data, array $costumerData)
    {
        $user = User::create($data);
        $costumerData['user_id'] = $user->id;
        $costumer = Costumer::create($costumerData);
        return ['user' => $user, 'costumer' => $costumer];
    }

    }