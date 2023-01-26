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
Route::get('/',function()
{
    return view('welcome');
});
Route::get('/home', function () {
    return view('layouts.main');
});
Route::get('/dashboard','Admin\FrontendController@index');
Route::get('/categories','Admin\CategoryController@index');
Route::get('/add-category','Admin\CategoryController@add');
Route::post('insert-category','Admin\CategoryController@insert');
/* added by yasmina*/
Route::get('/storagesys&units','Admin\CategoryController@storagesysunits');
Route::get('/sofas&armchairs','Admin\CategoryController@sofasarmchairs');
Route::get('/tables&chairs','Admin\CategoryController@tableschairs');
