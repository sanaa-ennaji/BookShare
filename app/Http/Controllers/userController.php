<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Costumer;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
           
            $user = Auth::user();

            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            }
        elseif ($user->isStore()) {
                return redirect()->route('store.dashboard');
            }
             else {
                return redirect()->route('cart');
            }
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid infos']);
    }


    public function logout (){
        auth()->logout();
        return redirect('/') ;
    }



}
