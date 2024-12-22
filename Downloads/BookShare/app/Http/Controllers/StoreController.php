<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ServiceInterface\StoreServiceInterface;


class StoreController extends Controller
{
    private $storeService;

    public function __construct(StoreServiceInterface  $storeService)
    {
        $this->storeService = $storeService;
    }
    public function StoreRegister (Request $request){
       
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password'=>['required'],
        ]);
       
        $storeData = $request->validate([
            'phone'=>['required'],
            'address'=>['required'],
            'city'=>['required'],
            'description'=>['required'],
         ]);
         
        $data['password'] = bcrypt($data['password']);
    $user =   $this->storeService->createStore($data ,$storeData);
   
         auth()->login($user);
          return redirect('/profile-update');
      
    }

  

    public function updateStoreProfile(Request $request, int $id)
    {
      
        $data = $request->validate([
            'description' => ['required'],
            'cover' => [ 'image', 'mimes:jpeg,png,jpg,gif'], 
            'image' => [ 'image', 'mimes:jpeg,png,jpg,gif'], 
        ]);
    
    
        if ($request->hasFile('cover')) {
            $coverFile = $request->file('cover');
            $coverImageName = time() . '.' . $coverFile->extension();
            $coverFile->storeAs('public/img', $coverImageName);
            $data['cover'] = $coverImageName; 
        }
    
        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageImageName = time() . '.' . $imageFile->extension();
            $imageFile->storeAs('public/img', $imageImageName);
            $data['image'] = $imageImageName; 
        }
  

        $this->storeService->updateProfile($data, $id);
    
        return redirect()->back()->with('success', 'Store profile updated successfully');
    }
    

    public function StoreDetails($id)
    {
   
        $store = Store::findOrFail($id);
        $books = $store->books()->get(); 
        return view('stores.profile', compact('store', 'books')); 
    }
    
   

    public function deleteStore($id) {
        $store = Store::findOrFail($id);
        $user = $store->user;

        $store->delete();
    
        if ($user) {
            $user->delete();
        }
    
        return redirect()->back()->with('success', 'Store and associated user deleted successfully');
    }
    
public function StoreStatistics()
{
    $user = Auth::user();
    $store = $user->store;
    
    if (!$store) {
      return redirect()->back();
    }
    
    $bookCount = $store->books->count();
   $orderCount = $store->books->flatMap->orders->count();

    
    return view('stores.statistics', compact('store', 'bookCount', 'orderCount'));
}


}
