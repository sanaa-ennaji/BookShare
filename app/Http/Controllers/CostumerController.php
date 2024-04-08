<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\ServiceInterfaces\CostumerServiceInterface;



class CostumerController extends Controller
{

   
    public function __construct( protected CostumerServiceInterface $costumerService ) {

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
       $user= $this->costumerService->CostumerRegister($datad ,$costumerData);
   
       auth()->login($user);
          return redirect('/');
      
    }

    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }

  
}
