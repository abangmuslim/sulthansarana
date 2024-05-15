<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\PeminjamController;

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

Route::get('/',function(){
    return view('welcome',[
        "title"=>"Dashboard"
    ]);
    
});


Route::resource('user',UserController::class)
->except('destroy','create','show','update','edit');

Route::resource('barang',barangController::class);

Route::resource('pinjam',PinjamController::class)
->except('destroy');

Route::resource('peminjam',PeminjamController::class)
->except('destroy');

Route::get('login',[LoginController::class,'loginView'])->name('login');

Route::post('login',[LoginController::class,'authenticate']);

Route::post('logout',[LoginController::class,'loginView'])->name('logout');

