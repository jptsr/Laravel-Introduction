<?php

use App\Http\Controllers\RestaurantController;
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

Route::get('/', function () { return view('welcome'); });

Route::get('/restaurants', [RestaurantController::class, 'index']);

Route::get('/restaurant/show/{restaurant:id}', [RestaurantController::class, 'show']);

Route::get('/restaurant/create', [RestaurantController::class, 'create']);

Route::post('/restaurant/create', [RestaurantController::class, 'store']);

Route::get('/restaurant/edit/{restaurant:id}', [RestaurantController::class, 'edit']);

Route::patch('/restaurant/edit/{restaurant:id}', [RestaurantController::class, 'update']);