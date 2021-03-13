<?php

use App\Http\Controllers\HomeCompanyController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/home', [HomeCompanyController::class, 'index']);

Route::prefix('product')->group(function () {
    Route::get('/{id}', [App\Http\Controllers\ProductsController::class, 'product']);
});

Route::prefix('product')->group(function () {
    Route::get('/', [App\Http\Controllers\ProductsController::class, 'product']);
});

Route::get('/news/{id?}', [App\Http\Controllers\NewsController::class, 'news']);

Route::prefix('program')->group(function () {
    Route::get('/{id}', [App\Http\Controllers\ProgramController::class, 'program']);
});

Route::get('/AboutUs', [App\Http\Controllers\AboutController::class, 'about']);


Route::resource('/ContactUs', [App\Http\Controllers\ContactUsController::class, 'contact']);