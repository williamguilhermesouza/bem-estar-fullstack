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
Route::prefix('/admin')->name('admin.')->group(function() {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

    Route::get('/atendimentos', [AttendanceController::class, 'index'])->name('attendance');
    Route::prefix('/atendimentos')->name('attendance.')->group(function() {
        Route::get('/listar/{id}', [AttendanceController::class, 'list'])->name('list');
        Route::get('/novo', [AttendanceController::class, 'create'])->name('new');
    });

    Route::get('/movimentacoes', [MovementController::class, 'index'])->name('movement');
    Route::prefix('/movimentacoes')->name('movement.')->group(function() {
        Route::get('/novo', [MovementController::class, 'create'])->name('new');
        Route::post('/salvar', [MovementController::class, 'store'])->name('save');
        Route::get('/mostrar/{id}', [MovementController::class, 'show'])->name('show');
        Route::get('/editar/{id}', [MovementController::class, 'edit'])->name('edit');
        Route::post('/atualizar/{id}', [MovementController::class, 'update'])->name('update');
        Route::get('/deletar/{id}', [MovementController::class, 'destroy'])->name('destroy');
    });

    Route::get('/pacientes', [PatientController::class, 'index'])->name('patient');
    Route::prefix('/pacientes')->name('patient.')->group(function() {
        Route::get('/novo', [PatientController::class, 'create'])->name('new');
        Route::post('/salvar', [PatientController::class, 'store'])->name('save');
        Route::get('/mostrar/{id}', [PatientController::class, 'show'])->name('show');
        Route::get('/editar/{id}', [PatientController::class, 'edit'])->name('edit');
        Route::post('/atualizar', [PatientController::class, 'update'])->name('update');
        Route::get('/deletar/{id}', [PatientController::class, 'destroy'])->name('destroy');
    });
    Route::get('/usuarios', [UserController::class, 'index'])->name('user');
    Route::prefix('/usuarios')->name('user.')->group(function() {
        Route::get('/novo', [UserController::class, 'create'])->name('new');
        Route::post('/salvar', [UserController::class, 'store'])->name('save');
        Route::get('/deletar/{id}', [UserController::class, 'destroy'])->name('destroy');
    });
});

Route::redirect( '/', '/login' );

Auth::routes();

