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
    
   
    

    public function showUsers(){
        $users = User::all();
        return view('admin.users', ['users' => $users]);
    }

    public function updateuserstatus(Request $request , $id){
        
        $request->validate([
            'status' => 'required',
        ]);
       
    
        $user = User::findOrFail($id);
     
    
        $user->update(['status' => $request->input('status')]);
   
        return redirect()->back()->with('success', 'status updated successfully');
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
