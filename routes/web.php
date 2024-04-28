<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\OrderDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app', function () {
    return view('app');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/stores/store', function () {
//     return view('stores.store');
// });

Route::get('/stores/profile', function () {
    return view('stores.profile');
});

Route::get('/StoreRegister', function () {
    return view('stores.StoreRegister');
});
Route::get('/waiting', function () {
    return view('stores.waiting');
}); 

Route::get('/adminStatistic', [AdminController::class, 'statistics'])->name('statistics');


Route::get('/payment/success', function () {
    return view('client.success');
}); 
Route::get('/adminCategory', function () {
    return view('admin.category');
}); 

Route::get('/dashboard', function () {
    return view('stores.dashboard');
}); 
Route::get('/shipping' ,function (){
 return view('client.shippingDetails');
})->name('payment.success');


Route::get('public/books' ,function (){
    return view('public.books');
   });

   Route::get('costumer/orders' ,function (){
    return view('client.orders');
   });
   Route::get('/adminDamandes', [AdminController::class, 'Storesdamanede'])->name('damandes.stores');
   Route::post('/update-status', [AdminController::class, 'updateStatus'])->name('update-status');
 Route::get('/adminStores', [AdminController::class, 'displayStores'])->name('validated.stores');
Route::post('/createCategory', [CategoryController::class, 'createCategory']);
Route::get('/adminCategory', [CategoryController::class, 'showCategories']);
Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');
Route::put('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);


Route::post('/CostumerRegister', [CostumerController::class, 'CostumerRegister']);
Route::post('/StoreRegister', [StoreController::class, 'StoreRegister']);
Route::post('/loginauth', [userController::class, 'login']);
Route::post('/logout', [userController::class, 'logout']);
Route::post('/createBook', [BookController::class, 'createBook']);

Route::get('/dashboard', [BookController::class, 'showCategoryAndBooks'])->name('stores.books');
Route::get('/', [BookController::class, 'index']);
Route::get('/editbook/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/updatebook/{id}', [BookController::class, 'updatebook'])->name('book.update');
Route::put('/updateProfile/{id}', [StoreController::class, 'updateStoreProfile'])->name('store.update');
Route::delete('/deletebook/{id}', [BookController::class, 'destroy']);
Route::get('/details/{id}', [BookController::class, 'showDetails'])->name('book.details');

Route::get('/StoreDtails/{id}', [StoreController::class, 'StoreDetails'])->name('store.profile');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
Route::get('/payment/success', [OrderController::class, 'paymentSuccess']);
Route::post('/createaddress' , [OrderDetailsController::class , 'store']);

Route::get('/profile-update' ,function (){
    return view('stores.updateProfile');
   });
Route::get('/searsh', [BookController::class, 'searshBook'])->name('search');
Route::delete('/deleteItem/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');


Route::get('/stores/store', [AdminController::class, 'indexStores']);
// Route::get('/details', function () {
//     return view('public.BookDetails');
// }); 

// Route::get('/statistics' ,function (){
//     return view('stores.statistics');
//    });
Route::get('/invoice/{orderId}', [InvoiceController::class, 'displayInvoice']);
Route::get('/invoice/{orderId}/generate', [InvoiceController::class, 'generateInvoice'])->name('invoice.generate');

Route::get('costumer/orders' , [OrderController::class , 'costumerOrders'])->name('orders.show');

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
// Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/callback/google', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/statistics', [StoreController::class, 'StoreStatistics'])->name('store.statistics');


Route::put('/updateOrder/{id}', [OrderController::class, 'updateOrder'])->name('orders.update');
Route::get('/store/orders', [OrderController::class, 'storeOrders'])->name('store.orders');

Route::post('/validation', [AdminController::class, 'updateStatus'])->name('validation');


// admin 

Route::delete('/stores/{id}', [StoreController::class, 'deleteStore'])->name('stores.delete');







// book store 







 // client