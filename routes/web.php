<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
// env
// view
// routes
Route::get('/home',[UserController::class,'index'])->name('user.home');

Route::get('/',function(){
    return view('home');
});



Route::get('/create/user',[UserController::class,'create'])->name('create.user');

Route::post('/store/user',[UserController::class,'store'])->name('store.user');
Route::get('/update/user/{id}',[UserController::class,'update'])->name('update.user');

Route::put('/saveUpdate//{id}',[UserController::class,'saveUpdate'])->name('saveUpdate.user');

Route::get('/show/user/{id}',[UserController::class,'show'])->name('show.user');

Route::get('/users/{id}',[UserController::class,'destroy'])->name('destroy.user');

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('invoices', InvoiceController::class);

