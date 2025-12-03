<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\UtilisateurController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/comptes', [CompteController::class, 'index']);
Route::get('/compte/{id}/operations', [CompteController::class, 'showOperations']);
Route::post('/compte/{id}/depot', [CompteController::class, 'depot']);
Route::post('/compte/{id}/retrait', [CompteController::class, 'retrait']);

Route::get('/ajout-compte', [CompteController::class, 'create']);
Route::post('/ajout-compte', [CompteController::class, 'store']);

Route::get('/ajout-utilisateur', [UtilisateurController::class, 'create']);
Route::post('/ajout-utilisateur', [UtilisateurController::class, 'store']);

