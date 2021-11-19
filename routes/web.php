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
    Route::get('/', HomeController::class)->name('admin.home');
    Route::get('/agenda', [AgendaController::class, 'index'])->name('admin.agenda');
    Route::get('/atendimentos', [AttendanceController::class, 'index'])->name('admin.attendance');
    Route::get('/movimentacoes', [MovementController::class, 'index'])->name('admin.movement');
    Route::get('/pacientes', [PatientController::class, 'index'])->name('admin.patient');
    Route::get('/pacientes/novo', [PatientController::class, 'create'])->name('admin.patient.new');
    Route::post('/pacientes/salvar', [PatientController::class, 'store'])->name('admin.patient.save');
    Route::get('/pacientes/mostrar/{id}', [PatientController::class, 'show'])->name('admin.patient.show');
    Route::get('/pacientes/editar/{id}', [PatientController::class, 'edit'])->name('admin.patient.edit');
    Route::post('/pacientes/atualizar', [PatientController::class, 'update'])->name('admin.patient.update');
    Route::get('/pacientes/deletar/{id}', [PatientController::class, 'destroy'])->name('admin.patient.destroy');
    Route::get('/usuarios', [UserController::class, 'index'])->name('admin.user');
    Route::get('/usuarios/novo', [UserController::class, 'create'])->name('admin.user.new');
    Route::post('/usuarios/salvar', [UserController::class, 'store'])->name('admin.user.save');
    Route::get('/usuarios/deletar/{id}', [UserController::class, 'destroy'])->name('admin.user.destroy');

});

Route::redirect( '/', '/login' );

Auth::routes();

