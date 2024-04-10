<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInterfaces\CostumerServiceInterface;

class CostumerController extends Controller
{
    protected $costumerServiceInterface;

    public function __construct(CostumerServiceInterface $costumerServiceInterface)
    {
        $this->costumerServiceInterface = $costumerServiceInterface;
    }

    public function costumerRegister(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $costumerData = $request->validate([
            'phone' => ['required']
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = $this->costumerServiceInterface->create($data, $costumerData);

        auth()->login($user);
        return redirect('/');
    }


 
  
}
