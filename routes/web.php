<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

route::middleware('auth')->group(function () {
    Route::resource('/game', GameController::class);
    Route::resource('/status', StatusController::class);
});
