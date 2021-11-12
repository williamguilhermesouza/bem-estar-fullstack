<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\MovementController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\UserController;

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
Route::prefix('/admin')->group(function() {
    Route::get('/', HomeController::class);
    Route::get('/agenda', [AgendaController::class, 'index']);
    Route::get('/atendimentos', [AttendanceController::class, 'index']);
    Route::get('/movimentacao', [MovementController::class, 'index']);
    Route::get('/pacientes', [PatientController::class, 'index']);
    Route::get('/usuarios', [UserController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
