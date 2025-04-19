<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\JugadorController;

// Public routes
Route::get('/', function () {
    return view('inici');
})->name('home');

Route::get('/info', function () {
    return view('info');
})->name('info');

// Auth routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['AdminAuth'])->group(function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        
        // User management routes
        Route::resource('users', UserController::class)->except(['show', 'edit', 'update']);
        
        // Equip & Jugador management routes (CRUD)
        Route::resource('equips', EquipController::class);
        Route::resource('jugadors', JugadorController::class);
    });
    Route::get('/equips/{equip}/pdf', [EquipController::class, 'pdf'])->name('equips.pdf');
    Route::get('/jugadors/{jugador}/pdf', [JugadorController::class, 'pdf'])->name('jugadors.pdf');
    // Consultor routes
    Route::middleware(['ConsultorAuth'])->group(function () {
        Route::get('/consultor', function () {
            return view('consultor.dashboard');
        })->name('consultor.dashboard');
        
        // Read-only access to Equips and Jugadors
        Route::get('/consultor/equips', [EquipController::class, 'index'])->name('consultor.equips.index');
        
        Route::get('/consultor/equips/{equip}', [EquipController::class, 'show'])->name('consultor.equips.show');
        
        Route::get('/consultor/jugadors', [JugadorController::class, 'index'])->name('consultor.jugadors.index');
        Route::get('/consultor/jugadors/{jugador}', [JugadorController::class, 'show'])->name('consultor.jugadors.show');
    });
});

// Error routes
Route::fallback(function () {
    return view('errors.404');
});