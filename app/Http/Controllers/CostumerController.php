<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\RepositoryInterfaces\CostumerRepositoryInterface;


class CostumerController extends Controller
{

    private $costumerRepository;

    public function __construct(CostumerRepositoryInterface $costumerRepository)
    {
        $this->costumerRepository = $costumerRepository;
    }
    public function CostumerRegister (Request $request){
       
        $datad = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
        ]);
       
        $data = $request->validate([
            'user_id' => ['required'],
            'phone'=>['required']
         ]);
        $datad['password'] = bcrypt($datad['password']);
       $user= User::create($datad);
       auth()->login($user);
       $costumer = Costumer::create([$data]);

          return redirect('/');
      
    }

    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }

    
    
}
