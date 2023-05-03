<?php

use App\Http\Controllers\Web\V1\ControlPanelController;
use App\Http\Controllers\Web\V1\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes(['verify' => true]);
Route::group(['middleware' => ['guest'],], function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
    Route::get('/term-conditions', [WelcomeController::class, 'termConditions'])->name('term-conditions');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/control-panel', [ControlPanelController::class, 'index'])->name('control_panel');
});

