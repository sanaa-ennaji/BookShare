<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\ServiceInterface\AdminServiceInterface;

class AdminController extends Controller
{
    
    
    protected $adminService;
    public function __construct(AdminServiceInterface $adminService)
    {
        $this->adminService = $adminService;
    }
    public function displayStores (){
        $stores = $this->adminService->displayStores();

        return view('admin.damandes', compact('stores'));
    }

    public function Storesdamanede (){
        $stores = $this->adminService->Storesdamanede();

        return view('admin.damandes', compact('stores'));
    }
   
    public function updateStatus(Request $request)
    {
        
        $request->validate([
            'storeId' => 'required|exists:stores,id',
            'status' => 'required|in:active,banned',
        ]);

    
        $store = Store::findOrFail($request->storeId);

        // Update the store status
        $store->status = $request->status;
        $store->save();

      
        return response()->json(['message' => 'Store status updated successfully'], 200);
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
