<?php

use App\Http\Controllers\DashboardEsportsPubgMobileController;
use App\Http\Controllers\LandingEsportsPubgMobileController;
use App\Http\Controllers\DashboardEsportsPointBlankController;
use App\Http\Controllers\LandingEsportsPointBlankController;
use App\Http\Controllers\DashboardEsportsDota2Controller;
use App\Http\Controllers\LandingEsportsDota2Controller;
use App\Http\Controllers\DashboardEsportsMobileLegendsController;
use App\Http\Controllers\LandingEsportsMobileLegendsController;

use App\Http\Controllers\LandingCaturBereguController;
use App\Http\Controllers\DashboardCaturBereguController;
use App\Http\Controllers\LandingCaturPeroranganController;
use App\Http\Controllers\DashboardCaturPeroranganController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

/**
 * CATUR
 * - PERORANGAN
 * - BEREGU
 */
Route::get('/olahraga/catur', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.olahraga.catur.index', ['api' => $api]);
})->name('landing.olahraga.catur.index');

/** PERORANGAN */
Route::get('/olahraga/catur/perorangan', [LandingCaturPeroranganController::class, "index"])
	->name('landing.olahraga.catur.perorangan.index');
Route::post('/olahraga/catur/perorangan', [LandingCaturPeroranganController::class, "store"])
	->name('landing.olahraga.catur.perorangan.store');
Route::get('/olahraga/catur/perorangan/success', [LandingCaturPeroranganController::class, "success"])
	->name('landing.olahraga.catur.perorangan.success');
Route::get('/dashboard/pendaftaran/catur/perorangan', [DashboardCaturPeroranganController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.catur.perorangan.index');
Route::put('/dashboard/pendaftaran/catur/perorangan', [DashboardCaturPeroranganController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.catur.perorangan.update');

/** BEREGU */
Route::get('/olahraga/catur/beregu', [LandingCaturBereguController::class, "index"])
        ->name('landing.olahraga.catur.beregu.index');
Route::post('/olahraga/catur/beregu', [LandingCaturBereguController::class, "store"])
        ->name('landing.olahraga.catur.beregu.store');
Route::get('/olahraga/catur/beregu/success', [LandingCaturBereguController::class, "success"])
        ->name('landing.olahraga.catur.beregu.success');
Route::get('/dashboard/pendaftaran/catur/beregu', [DashboardCaturBereguController::class, 'index'])
        ->middleware(['auth'])->name('pendaftaran.catur.beregu.index');
Route::put('/dashboard/pendaftaran/catur/beregu', [DashboardCaturBereguController::class, 'update'])
        ->middleware(['auth'])->name('pendaftaran.catur.beregu.update');


/**
 * ESPORTS
 * - PUBG MOBILE
 * - MLBB
 * - POINTBLANK
 * - DOTA2
 */
Route::get('/olahraga/esports', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.olahraga.esports.index', ['api' => $api]);
})->name('landing.olahraga.esports.index');

/** PUBG MOBILE */
Route::get('/olahraga/esports/pubgmobile', [LandingEsportsPubgMobileController::class, "index"])
	->name('landing.olahraga.esports.pubgmobile.index');
Route::post('/olahraga/esports/pubgmobile', [LandingEsportsPubgMobileController::class, "store"])
	->name('landing.olahraga.esports.pubgmobile.store');
Route::get('/olahraga/esports/pubgmobile/success', [LandingEsportsPubgMobileController::class, "success"])
	->name('landing.olahraga.esports.pubgmobile.success');
Route::get('/dashboard/pendaftaran/esports/pubgmobile', [DashboardEsportsPubgMobileController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.esports.pubgmobile.index');
Route::put('/dashboard/pendaftaran/esports/pubgmobile', [DashboardEsportsPubgMobileController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.esports.pubgmobile.update');

/** POINT BLANK */
Route::get('/olahraga/esports/pointblank', [LandingEsportsPointBlankController::class, "index"])
        ->name('landing.olahraga.esports.pointblank.index');
Route::post('/olahraga/esports/pointblank', [LandingEsportsPointBlankController::class, "store"])
        ->name('landing.olahraga.esports.pointblank.store');
Route::get('/olahraga/esports/pointblank/success', [LandingEsportsPointBlankController::class, "success"])
        ->name('landing.olahraga.esports.pointblank.success');
Route::get('/dashboard/pendaftaran/esports/pointblank', [DashboardEsportsPointBlankController::class, 'index'])
        ->middleware(['auth'])->name('pendaftaran.esports.pointblank.index');
Route::put('/dashboard/pendaftaran/esports/pointblank', [DashboardEsportsPointBlankController::class, 'update'])
        ->middleware(['auth'])->name('pendaftaran.esports.pointblank.update');


/** DOTA 2 */
Route::get('/olahraga/esports/dota2', [LandingEsportsDota2Controller::class, "index"])
        ->name('landing.olahraga.esports.dota2.index');
Route::post('/olahraga/esports/dota2', [LandingEsportsDota2Controller::class, "store"])
        ->name('landing.olahraga.esports.dota2.store');
Route::get('/olahraga/esports/dota2/success', [LandingEsportsDota2Controller::class, "success"])
        ->name('landing.olahraga.esports.dota2.success');
Route::get('/dashboard/pendaftaran/esports/dota2', [DashboardEsportsDota2Controller::class, 'index'])
        ->middleware(['auth'])->name('pendaftaran.esports.dota2.index');
Route::put('/dashboard/pendaftaran/esports/dota2', [DashboardEsportsDota2Controller::class, 'update'])
        ->middleware(['auth'])->name('pendaftaran.esports.dota2.update');


/** MOBILE LEGENDS */
Route::get('/olahraga/esports/mobilelegends', [LandingEsportsMobileLegendsController::class, "index"])
        ->name('landing.olahraga.esports.mobilelegends.index');
Route::post('/olahraga/esports/mobilelegends', [LandingEsportsMobileLegendsController::class, "store"])
        ->name('landing.olahraga.esports.mobilelegends.store');
Route::get('/olahraga/esports/mobilelegends/success', [LandingEsportsMobileLegendsController::class, "success"])
        ->name('landing.olahraga.esports.mobilelegends.success');
Route::get('/dashboard/pendaftaran/esports/mobilelegends', [DashboardEsportsMobileLegendsController::class, 'index'])
        ->middleware(['auth'])->name('pendaftaran.esports.mobilelegends.index');
Route::put('/dashboard/pendaftaran/esports/mobilelegends', [DashboardEsportsMobileLegendsController::class, 'update'])
        ->middleware(['auth'])->name('pendaftaran.esports.mobilelegends.update');
