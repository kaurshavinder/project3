<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/shop', function(){
//     echo 'Welcome kaur in our world';
// });

Route::get('/', [App\Http\Controllers\HomeController::class,'home']);

// Route::get/post/put/patch/delete('url', Controller::class,  'function');

Route::get('/',[App\Http\Controllers\shop::class,'hello']);
Route::get('/',[App\Http\Controllers\ContactController::class,'test2']);

Route::get('/product',[App\Http\Controllers\ProductController::class, 'index']);
Route::get('/product-create',[App\Http\Controllers\ProductController::class, 'create'])->name('productcreate');
Route::post('/product-store',[App\Http\Controllers\ProductController::class, 'store'])->name('productstore');
// Route::post();
// Route::put();
// Route::delete();

//practice
Route::get('/practice',[App\Http\Controllers\PracticeController::class,'index']);
Route::get('/product-create-test',[App\Http\Controllers\PracticeController::class,'create'])->name('pro');
Route::post('/product-store/test',[App\Http\Controllers\PracticeController::class,'store']);

