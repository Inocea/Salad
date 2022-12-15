<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaladController;

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

Route::controller(SaladController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'top')->name('top');
    Route::post('/salads','store')->name('store');
    Route::get('/salads/index', 'index')->name('index');
    Route::get('/salads/create', 'create')->name('create');
    Route::post('/salads/create', 'cloudinary_store')->name('cloudinary_store');  //画像保存処理
    Route::get('/salads/mypage', 'mypage')->name('mypage'); //マイページ
    Route::get('/salads/{salad}', 'show')->name('show');
    Route::get('/salads/{salad}/edit', 'edit')->name('edit'); //編集機能
    Route::put('/salads/{salad}', 'update')->name('update'); //編集機能
    Route::delete('/salads/{salad}', 'delete')->name('delete'); //削除機能
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
