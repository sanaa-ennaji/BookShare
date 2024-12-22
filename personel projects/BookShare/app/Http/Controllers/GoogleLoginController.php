<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Costumer;

use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $googleUser->email)->first();
        
        if(!$user) {
            $user = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => \Hash::make(rand(100000,999999))
            ]);

         
            $costumer = new Costumer();
            $costumer->user_id = $user->id; 
            $costumer->save();
        }

        Auth::login($user);

        return redirect()->back();
    }
}
