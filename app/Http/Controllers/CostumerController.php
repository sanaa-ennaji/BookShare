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
       
        $costumerData = $request->validate([
            'phone'=>['required']
         ]);
         
        $datad['password'] = bcrypt($datad['password']);
       $user= $this->costumerRepository->CostumerRegister($datad ,$costumerData);
   
       auth()->login($user);
          return redirect('/');
      
    }

    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }

  
}
