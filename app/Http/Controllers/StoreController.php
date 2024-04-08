<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class StoreController extends Controller
// {
//     private $storeRepository;

//     public function __construct(StoreRepositoryInterface $storeRepository)
//     {
//         $this->storeRepository = $storeRepository;
//     }
//     public function CostumerRegister (Request $request){
       
//         $data = $request->validate([
//             'name' => ['required'],
//             'email' => ['required'],
//             'password'=>['required'],
//         ]);
       
//         $StoreData = $request->validate([
//             'phone'=>['required'],
//             'address'=>['required'],
//             'city'=>['required'],
//             'description'=>['required'],
//          ]);
         
//         $data['password'] = bcrypt($datad['password']);
//        $user= $this->storeRepository->StoreRegister($data ,$StoreData);
   
//        auth()->login($user);
//           return redirect('/');
      
//     }
// }
