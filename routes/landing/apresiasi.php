<?php

use App\Http\Controllers\DashboardDutaKampusController;
use App\Http\Controllers\LandingDutaKampusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

Route::get('/apresiasi/dutakampus', [LandingDutaKampusController::class, 'index'])
	->name('landing.apresiasi.dutakampus.index');
Route::post('/apresiasi/dutakampus', [LandingDutaKampusController::class, 'store'])
	->name('landing.apresiasi.dutakampus.store');
Route::get('/apresiasi/dutakampus/success', [LandingDutaKampusController::class, 'success'])
	->name('landing.apresiasi.dutakampus.success');
Route::get('/dashboard/pendaftaran/dutakampus', [DashboardDutaKampusController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.dutakampus.index');
Route::put('/dashboard/pendaftaran/dutakampus', [DashboardDutaKampusController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.dutakampus.update');
