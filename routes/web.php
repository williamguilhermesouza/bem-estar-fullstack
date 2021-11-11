<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AgendaController;
use App\Http\Controllers\Site\AttendanceController;
use App\Http\Controllers\Site\MovementController;
use App\Http\Controllers\Site\PatientController;
use App\Http\Controllers\Site\UserController;

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

Route::get('/', HomeController::class);
Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/atendimentos', [AttendanceController::class, 'index']);
Route::get('/movimentacao', [MovementController::class, 'index']);
Route::get('/pacientes', [PatientController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'index']);
