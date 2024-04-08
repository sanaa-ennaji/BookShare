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
       
        $storeData = $request->validate([
            'phone'=>['required'],
            'address'=>['required'],
            'city'=>['required'],
            'description'=>['required'],
         ]);
         
        $data['password'] = bcrypt($data['password']);
       $this->storeService->StoreRegister($data ,$storeData);
   
    //auth()->login($user);
          return redirect('/waiting');
      
    }
}
