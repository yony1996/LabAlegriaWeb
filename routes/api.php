<?php

use App\Http\Controllers\Api\AppoimentController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ResultsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/appoiments', [AppoimentController::class, 'index']);
    Route::post('/appoiments/create', [AppoimentController::class, 'store']);
    Route::get('/exams', [ExamController::class, 'index']);
    Route::get('/results', [ResultsController::class, 'index']);
    Route::get('/information', [AuthController::class, 'info']);
    Route::get('/download/result/{result}', [ResultsController::class, 'print']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/schedule/hours', [ScheduleController::class, 'hours']);
