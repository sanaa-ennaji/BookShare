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
    
  
    public function validation(Request $request)
    {
        $storeId = $request->input('storeId');
        $is_validated = $request->input('is_validated');
    
       
        $store = Store::find($storeId);
        $store->is_validated = $is_validated;
        $store->save();
    
        return response()->json(['message' => 'validate successfully']);
    }
    
   

   
 


}
