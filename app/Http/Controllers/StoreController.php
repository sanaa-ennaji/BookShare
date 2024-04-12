<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceInterface\StoreServiceInterface;


class StoreController extends Controller
{
    private $storeService;

    public function __construct(StoreServiceInterface  $storeService)
    {
        $this->storeService = $storeService;
    }
    public function StoreRegister (Request $request){
       
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
    $user =   $this->storeService->createStore($data ,$storeData);
   
         auth()->login($user);
          return redirect('/waiting');
      
    }

  

    public function updateStoreProfile () {


    }

    


}
