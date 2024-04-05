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
                return redirect()->route('admin.dashboard');
            }
             else {
                return redirect()->route('Costumer.dashboard');
            }
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid infos']);
    }


    

// public function userStatistics()
// {
//     $userId = Auth::id();
//     $numberOfEvents = Event::where('user_id', $userId)->count();
//     $numberOfReservations = Reservation::whereIn('event_id', function ($query) use ($userId) {
//         $query->select('id')->from('events')->where('user_id', $userId);
//     })->count();

//     return view('creator.statistique', compact('numberOfEvents', 'numberOfReservations'));
// }

// public function statistics()
// {
//     $userCount = User::count();
//     $acceptedEventsCount = Event::where('status', 'accepted')->count();
//     $acceptedReservationsCount = Reservation::where('is_validated', 'accepted')->count();

//     return view('admin.statistique', compact('userCount', 'acceptedEventsCount', 'acceptedReservationsCount'));
// }

}
