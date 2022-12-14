<?php

use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ColoursController;
use App\Http\Controllers\CarsController;
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
});

//Бренды
Route::get('/brands/pagination', [BrandsController::class, 'pagination']);
Route::resource('brands', BrandsController::class);
//Или
//Route::get('/brands', [BrandsController::class, 'index']);
//Route::get('/brand/create', [BrandsController::class, 'create']);
//Route::get('/brand/{id}', [BrandsController::class, 'show']);
//Route::post('/brands', [BrandsController::class, 'store']);
//Route::delete('/brands', [BrandsController::class, 'destroy']);

//Цвета
Route::get('/colours/deleteForm', [ColoursController::class, 'deleteForm']);
Route::resource('colours', ColoursController::class);

//Автомобили
Route::resource('cars', CarsController::class);

