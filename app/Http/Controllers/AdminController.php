<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    
    protected $adminService;
    public function __construct(AdminInterface $adminService)
    {
        $this->adminService = $adminService;
    }
    public function displayStores (){
        $stores = $this->adminService->getValidatedStores();

        return view('admin.stores', compact('stores'));
    }

   
    
    public function ArchiveUser () {

    }
  
    public function accepteStore (){
 

    }

 public function displayCostumers (){

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
