<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[AuthController::class,'loginView'])->name('login');
    Route::post('/login',[AuthController::class,'login']);
});



