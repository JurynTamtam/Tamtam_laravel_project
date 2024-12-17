<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('register');
});

//Route::get('/book', function () {
   // return view('pages/book');
//});
Route::get('/dashboard', function () {
    return view('pages/dashboard');
});
Route::get('/login', function () {
    return view('/login');
});


Route::post('/register', [AdminController::class, 'store']);  // For form submission
Route::post('/authentication', [AdminController::class, 'authenticate']);

Route::get('/book', [BookController::class, 'index']);
Route::get('/book-form', [BookController::class, 'show_add_form']);
Route::post('/add-book', [BookController::class, 'do_add']);
Route::post('/update-book', [BookController::class, 'do_update']);
Route::get('/delete-book/{id}', [BookController::class, 'do_delete']);
Route::get('/edit-book/{id}', [BookController::class, 'show_edit_form']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::post('/update-customer', [CustomerController::class, 'do_update']);
Route::get('/customer-form', [CustomerController::class, 'show_add_form']);
Route::post('/add-customer', [CustomerController::class, 'do_add']);
Route::get('/delete-customer/{id}', [CustomerkController::class, 'do_delete']);
Route::get('/edit-customer/{id}', [CustomerController::class, 'show_edit_form']);


use App\Http\Controllers\CartController;

Route::get('/register', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/register', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
