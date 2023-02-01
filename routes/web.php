<?php

use App\Http\Controllers\{EventController, HomeController, UserController};
use Illuminate\Support\Facades\{Auth, Route};

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


//Welcome Guest
Route::get('/', function () {
    return view('welcome');
});

//Welcome Auth
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// Auth
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::resource('acara', EventController::class);
    Route::resource('instansi', UserController::class);
});
