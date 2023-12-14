<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistersController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/admin/home', [AdminController::class, 'index'])->name('admin')->middleware('CheckAdmin');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('login.logout')->middleware('auth');

Route::controller(RegistersController::class)->group(function () {
    Route::get('registers','index')->name('resgistros');
    Route::get('registers/create','create')->name('register.create');
    Route::post('registers/create', 'store')->name('register.store');
});

Route::prefix('admin')->group(function () {

    Route::get('users', [UsuarioController::class, 'index'])->name('usuario');
    Route::get('users/create', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::post('users/create', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('users/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::post('users/edit/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
    Route::get('users/destroy/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
    
    Route::get('solicitacoes', [RegistersController::class, 'listarSolicitacoes'])->name('registro.solicitacao');
    Route::get('registers/edit/{id}', [RegistersController::class, 'listarSolicitacoes'])->name('registro.edit');
});

Auth::routes(['register' => false]);
