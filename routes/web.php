<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers;


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
});

Route::get('users/edit{id}',[UserController::class, 'edit']);
Route::get('users/create',[UserController::class, 'create']);
Route::post('users/',[UserController::class, 'store']);
Route::get('users/',[UserController::class, 'index']);
Route::get('users/{id}',[UserController::class, 'show']);

Route::get('restaurants/',[RestaurantController::class, 'index']);
Route::get('users/restaurants/{id}',[UserController::class, 'listByRestaurant']);
Route::get('restaurants/create',[RestaurantController::class, 'create']);

Route::post('restaurants/',[RestaurantController::class, 'store']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
