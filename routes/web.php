<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TimestampController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('users.index');
Route::get('/timestamp', [App\Http\Controllers\DashboardController::class, 'timestamp'])->name('users.timestamp');
Route::resource('savetime', TimestampController::class);

Route::get('/', function(){
    return Auth::user()->name ?? 'no login';
});

Route::get('user/signin', [AuthController::class, 'signin'])->name('user.signin');
Route::post('user/signin', [AuthController::class, 'signinCallback'])->name('user.signinCallback');
Route::get('user/signout', [AuthController::class, 'signout'])->name('user.signout');
Route::get('user/signout', [AuthController::class, 'signoutCallback'])->name('user.signoutCallback');
