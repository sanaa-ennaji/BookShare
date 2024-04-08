<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StoreController extends Controller
{
    private $storeService;

    public function __construct( StoreService  $storeService)
    {
        $this->storeService = $storeService;
    }
    public function CostumerRegister (Request $request){
       
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
        ]);
       
        $StoreData = $request->validate([
            'phone'=>['required'],
            'address'=>['required'],
            'city'=>['required'],
            'description'=>['required'],
         ]);
         
        $data['password'] = bcrypt($datad['password']);
       $user= $this->storeService->StoreRegister($data ,$StoreData);
   
       auth()->login($user);
          return redirect('/');
      
    }
}
