<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Stripe\Customer;
use App\Models\Order;
use App\Models\Store;
use App\Models\Costumer;
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

        return view('admin.stores', compact('stores'));
    }

    public function indexStores (){
        $stores = $this->adminService->displayStores();

        return view('stores.store', compact('stores'));
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

        $store->status = $request->status;
        $store->save();

      
        return response()->json(['message' => 'Store status updated successfully'], 200);
    }
    
    public function statistics()
    {
        $customerCount = Costumer::count();
        $orderCount = Order::count();
        $bookCount = Book::count();
        $storeCount = Store::count();

        return view('admin.statistique', compact('customerCount', 'orderCount', 'bookCount', 'storeCount'));
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
