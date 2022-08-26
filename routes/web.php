<?php

use App\Http\Controllers\AppoimentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\GenericController;
use App\Http\Controllers\WorkDayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SendMailAppoiment;
use App\Http\Controllers\UserController;
use App\Interfaces\ScheduleServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Mail\AppoimentMailable;
use Illuminate\Support\Facades\Mail;

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



Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/generic', function () {
    return view('table.generic');
});
Route::middleware('auth')->group(function () {
    Route::get('/appoiment', [AppoimentController::class, 'index'])->name('appoiment.index');
    Route::get('/appoiment/table', [AppoimentController::class, 'loadTable'])->name('loadTable');
    Route::get('/schedule', [WorkDayController::class, 'edit'])->name('schedule');
    Route::post('/schedule', [WorkDayController::class, 'store'])->name('schedule.store');
    Route::post('/appoiment', [AppoimentController::class, 'store'])->name('appoiment.store');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('user.update');
    Route::patch('/user/{user}/banned', [UserController::class, 'bannedUser'])->name('user.banned');
    Route::get('/users/table', [UserController::class, 'loadUsers']);
    Route::delete('/users/{user}', [UserController::class, 'destroy']);
    Route::get('/exams', [ExamController::class, 'index'])->name('exam');
    Route::get('/exams/{exam}/edit', [ExamController::class, 'edit'])->name('exam.edit');
    Route::patch('/exam/{exam}/edit', [ExamController::class, 'update'])->name('exam.update');
    Route::get('/exams/table', [ExamController::class, 'loadExams']);
    Route::post('/exams', [ExamController::class, 'store'])->name('exam.store');
    Route::delete('/exams/{exam}', [ExamController::class, 'destroy']);
    Route::put('/exams/{exam}/status', [ExamController::class, 'changeStatus']);
    Route::get('/exam/create', [ExamController::class, 'create'])->name('exam.create');
    Route::get('/table/generic', [GenericController::class, 'loadTables'])->name('generic.table');
    Route::patch('/AtendetAppoiment/{appoimentId}/change', [GenericController::class, 'updateAtendet']);
    Route::patch('/CancelAppoiment/{appoimentId}/change', [GenericController::class, 'updateCanceled']);
    Route::get('/result', [ResultController::class, 'results'])->name('results');
    Route::post('/result/Hematologia', [ResultController::class, 'storeHemato'])->name('store.hemato');
    Route::post('/result/Coprologia', [ResultController::class, 'storeCopro'])->name('store.copro');
    Route::post('/result/Orina', [ResultController::class, 'storeOrin'])->name('store.orin');
    Route::post('/result/Covid', [ResultController::class, 'storeCov'])->name('store.cov');
    Route::get('autocomplete', [UserController::class, 'autocomplete'])->name('autocomplete');
    Route::get('/records/{record}/preview', [ResultController::class, 'preview'])->name('record.preview');
    Route::get('/record/{record}/print',  [ResultController::class, 'print'])->name('record.print');
    Route::get('/mail', [SendMailAppoiment::class, 'index']);
});
