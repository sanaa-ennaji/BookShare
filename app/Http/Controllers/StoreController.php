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

  

    public function updateStoreProfile(Request $request ,int $id)
    {
        dd('ksjddkj');
        $data = $request->validate([
            'description' => ['required'],
        ]);
 
       
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '.' . $file->extension();
            $file->storeAs('public/img', $imageName);
            $data['image'] = $imageName;
        }

         
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $imageName = time() . '.' . $file->extension();
        $file->storeAs('public/img', $imageName);
        $data['image'] = $imageName;
    }

        $this->storeService->updateProfile($data ,$id);

        return redirect()->back()->with('success', 'Store profile updated successfully');
    }

    


}
