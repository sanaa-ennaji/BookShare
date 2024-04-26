<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Costumer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Store;


class UserController extends Controller
{
    
 
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
           
            $user = Auth::user();
    
            // Check if the user is associated with an admin record
            if ($user->admin()->exists()) {
                return redirect()->route('admin.category');
            } elseif ($user->store()->exists()) {
                return redirect()->route('store.dashboard');
            } else {
                return redirect()->route('cart.show');
            }
        }
    
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid infos']);
    }
    


    public function logout (){
        auth()->logout();
        return redirect('/register') ;
    }



}
