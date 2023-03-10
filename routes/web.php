<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
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
Route::get('/home',[StaticController::class , 'home']);
Route::get('/categories',[StaticController::class , 'categories']);
Route::get('/storagesys&units',[StaticController::class , 'storagesysunits']);
Route::get('/sofas&armchairs',[StaticController::class , 'sofasarmchairs']);
Route::get('/tables&chairs',[StaticController::class , 'tableschairs']);

Route::get('/', function () {
    return view('main');
});



