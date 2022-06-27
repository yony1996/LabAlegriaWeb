<?php

use App\Http\Controllers\AppoimentController;
use App\Http\Controllers\WorkDayController;
use App\Interfaces\ScheduleServiceInterface;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/appoiment', [AppoimentController::class, 'index'])->name('appoiment.index');
Route::get('/schedule', [WorkDayController::class, 'edit'])->name('schedule');
Route::post('/schedule', [WorkDayController::class, 'store'])->name('schedule.store');

Route::post('/appoiment', [AppoimentController::class, 'store'])->name('appoiment.store');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
