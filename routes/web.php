<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaladController;  //外部にあるPostControllerクラスをインポート。


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

Route::get('/', [SaladController::class, 'top']);
Route::get('/salads/index', [SaladController::class, 'index']);
Route::get('/salads/create', [SaladController::class, 'create']);
Route::get('/salads/{salad}', [SaladController::class ,'show']);