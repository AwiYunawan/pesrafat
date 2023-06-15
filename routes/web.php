<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardRoomController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LoginController;

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

Route::resource('dashboard/rooms', DashboardRoomController::class)->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('dashboard/users/{id}/makeAdmin', [DashboardUserController::class, 'makeAdmin'])->middleware('auth');

Route::resource('dashboard/users', DashboardUserController::class)->middleware('auth');

Route::get('dashboard/admin/{id}/removeAdmin', [DashboardAdminController::class, 'removeAdmin'])->middleware('auth');

Route::resource('dashboard/admin', DashboardAdminController::class)->middleware('auth');
