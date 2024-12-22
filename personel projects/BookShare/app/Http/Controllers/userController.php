<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    
 
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
           
            $user = Auth::user();
            if ($user->admin()->exists()) {
                return redirect()->route('admin.category');
            } elseif ($user->store()->exists()) {
                return redirect()->route('stores.books');
            } else {
                return redirect()->route('cart.show');
            }
        }
    
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid infos']);
    }
    


    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }



}
