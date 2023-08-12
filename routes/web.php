<?php

use App\Http\Controllers\ProductController;
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
    return view('view');
});
// Route::get('/Product',"ProductController@getAll");
// Route::get('/Product',[ProductController::class,"index"]);

Route::post('Product',[App\Http\Controllers\ProductController::class,"store"]);
// Route::post("product","ProductController@store")->name("product"); //not supported

