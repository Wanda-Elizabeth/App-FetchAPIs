<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\CatImageController;
use App\Http\Controllers\Auth\MakeupsController;
use AApp\Http\Controllers\Auth\ProfilesController;




Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => ''], function () {
    Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
    Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
    Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
    Route::post('authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
    Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::get('/cats', [CatImageController::class, 'index'])->name('catImages.index');
    Route::get('/makeups', [MakeupsController::class, 'showMakeup'])->name('makeups.showMakeup');
    Route::get('/profile', [ProfilesController::class, 'profile'])->name('profile.profile');
});




