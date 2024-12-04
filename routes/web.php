<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::view('/', 'home');

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('hello',function() {
//    return view('hello');
//});

//Route::get('/Products', function(){
//   return view('Products');
//});

Route::get('/products',[ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('products.create');

Route::post('/products/store', [ProductController::class, 'store'])
    ->name('products.store');

Route::get('products/{product}', [ProductController::class, 'show'])
    ->name('products.show');
//    ->whereNumber('id');

Route::get('products/{product}/edit', [ProductController::class, 'edit'])
    ->name('products.edit');
