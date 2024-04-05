<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostumerController extends Controller
{
    public function CostumerRegister (Request $request){
       
        $datad = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
            'address'=>['required'],
        ]);
       
        $data = $request->validate([
            'phone'=>['required'],
         ]);
        $datad['password'] = bcrypt($datad['password']);
       $user= User::create($datad);
       auth()->login($user);
       $costumer = Costumer::create([
        'user_id' => $user->id,
        'phone' => $data 
    ]);

          return redirect('/cart');
      
    }

    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'logemail' => 'required',
            'logpassword' => 'required'
        ]);
    
        if (auth()->attempt(['email' => $data['logemail'], 'password' => $data['logpassword']])) {
            $request->session()->regenerate();
    
            $user = auth()->user();
    
            if ($user->status == 0) {
               
                abort(404, 'User not found');
            }
    
            if ($user->role === 'admin') {
                return redirect('/admin');
            } elseif ($user->role === 'store') {
                return redirect('/store');
            } elseif ($user->role === 'client') {
                return redirect('/client');
            }
        }
    
        return redirect()->back()->with('error', 'Invalid credentials');
    }
    
}
