<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CostumerController;
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

Route::get('/payment', function () {
    return view('payment');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/stores/store', function () {
    return view('stores.store');
});

Route::get('/stores/profile', function () {
    return view('stores.profile');
});

Route::get('/StoreRegister', function () {
    return view('stores.StoreRegister');
});
Route::get('/waiting', function () {
    return view('stores.waiting');
}); 
Route::get('/admin/statistic', function () {
    return view('admin.statistique');
}); 

Route::get('/payment/success', function () {
    return view('client.success');
}); 
Route::get('/admin/category', function () {
    return view('admin.category');
}); 

Route::get('/dashboard', function () {
    return view('stores.dashboard');
}); 
Route::get('/shipping' ,function (){
 return view('client.shippingDetails');
});


// Route::get('admin/stores' ,function (){
//     return view('admin.stores');
//    });

   Route::get('costumer/orders' ,function (){
    return view('client.orders');
   });

   Route::post('/update-status', [AdminController::class, 'updateStatus'])->name('update-status');
 Route::get('admin/stores', [AdminController::class, 'displayStores'])->name('validated.stores');
Route::post('/createCategory', [CategoryController::class, 'createCategory'])->name('payment.cancel');
Route::get('/admin/category', [CategoryController::class, 'showCategories']);
Route::delete('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.category.delete');
Route::put('/updateCategory/{id}', [CategoryController::class, 'updateCategory']);


Route::post('/CostumerRegister', [CostumerController::class, 'CostumerRegister']);
Route::post('/StoreRegister', [StoreController::class, 'StoreRegister']);
Route::post('/createBook', [BookController::class, 'createBook']);

Route::get('/dashboard', [BookController::class, 'showCategoryAndBooks']);
Route::get('/', [BookController::class, 'index']);

Route::get('/details/{id}', [BookController::class, 'showDetails'])->name('book.details');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/orders/create', [OrderController::class, 'createOrder'])->name('orders.create');
Route::get('/payment/success', [OrderController::class, 'paymentSuccess'])->name('payment.success');
Route::post('/createaddress' , [OrderDetailsController::class , 'store']);


// Route::get('/details', [BookController::class, 'showDetails']);
// Route::get('/details', function () {
//     return view('public.BookDetails');
// }); 

Route::get('/sidebare' ,function (){
    return view('components.sidebare');
   });
Route::get('/invoice/{orderId}', [InvoiceController::class, 'displayInvoice']);
Route::get('/invoice/{orderId}/generate', [InvoiceController::class, 'generateInvoice'])->name('invoice.generate');

Route::get('costumer/orders' , [OrderController::class , 'costumerOrders']);