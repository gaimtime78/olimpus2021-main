<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingMaintenanceController;

/**
 * DASHBOARD CONTROLLER
 */
use App\Http\Controllers\DashboardSeniRupaKomikStripController;
use App\Http\Controllers\DashboardSeniRupaSeniLukisController;

use App\Http\Controllers\DashboardSeniTariTariTradisionalController;
use App\Http\Controllers\DashboardSeniTariTariModernController;

use App\Http\Controllers\DashboardSeniMusikSoloVocalController;
use App\Http\Controllers\DashboardSeniMusikMusicGroupController;

use App\Http\Controllers\DashboardSeniSastraCiptaPuisiController;
use App\Http\Controllers\DashboardSeniSastraBacaPuisiController;
use App\Http\Controllers\DashboardSeniSastraCiptaCerpenController;
use App\Http\Controllers\DashboardSeniSastraMhqController;
use App\Http\Controllers\DashboardSeniSastraMtqController;

/**
 * LANDING CONTROLLER
 */
use App\Http\Controllers\LandingSeniRupaKomikStripController;
use App\Http\Controllers\LandingSeniRupaSeniLukisController;

use App\Http\Controllers\LandingSeniTariTariTradisionalController;
use App\Http\Controllers\LandingSeniTariTariModernController;

use App\Http\Controllers\LandingSeniMusikSoloVocalController;
use App\Http\Controllers\LandingSeniMusikMusicGroupController;

use App\Http\Controllers\LandingSeniSastraCiptaPuisiController;
use App\Http\Controllers\LandingSeniSastraBacaPuisiController;
use App\Http\Controllers\LandingSeniSastraCiptaCerpenController;
use App\Http\Controllers\LandingSeniSastraMhqController;
use App\Http\Controllers\LandingSeniSastraMtqController;

/**
 * SENI RUPA
 * - KOMIK STRIP
 * - SENI LUKIS
 */
Route::get('/senibudaya/senirupa', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senirupa.index', ['api' => $api]);
})->name('landing.senibudaya.senirupa.index');

/** KOMIK STRIP */
Route::get('/senibudaya/senirupa/komikstrip', [LandingSeniRupaKomikStripController::class, "index"])
	->name('landing.senibudaya.senirupa.komikstrip.index');
Route::post('/senibudaya/senirupa/komikstrip', [LandingSeniRupaKomikStripController::class, "store"])
	->name('landing.senibudaya.senirupa.komikstrip.store');
Route::get('/senibudaya/senirupa/komikstrip/success', [LandingSeniRupaKomikStripController::class, "success"])
	->name('landing.senibudaya.senirupa.komikstrip.success');
Route::get('/dashboard/pendaftaran/senirupa/komikstrip', [DashboardSeniRupaKomikStripController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senirupa.komikstrip.index');
Route::put('/dashboard/pendaftaran/senirupa/komikstrip', [DashboardSeniRupaKomikStripController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senirupa.komikstrip.update');

/** SENI LUKIS */
Route::get('/senibudaya/senirupa/senilukis', [LandingSeniRupaSeniLukisController::class, "index"])
	->name('landing.senibudaya.senirupa.senilukis.index');
Route::post('/senibudaya/senirupa/senilukis', [LandingSeniRupaSeniLukisController::class, "store"])
	->name('landing.senibudaya.senirupa.senilukis.store');
Route::get('/senibudaya/senirupa/senilukis/success', [LandingSeniRupaSeniLukisController::class, "success"])
	->name('landing.senibudaya.senirupa.senilukis.success');
Route::get('/dashboard/pendaftaran/senirupa/senilukis', [DashboardSeniRupaSeniLukisController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senirupa.senilukis.index');
Route::put('/dashboard/pendaftaran/senirupa/senilukis', [DashboardSeniRupaSeniLukisController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senirupa.senilukis.update');

/**
 * SENI SASTRA
 * - CIPTA PUISI
 * - BACA PUISI
 * - CIPTA CERPEN
 * - MHQ
 * - MTQ
 */
Route::get('/senibudaya/senisastra', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senisastra.index', ['api' => $api]);
})->name('landing.senibudaya.senisastra.index');

/** CIPTA PUISI */
Route::get('/senibudaya/senisastra/ciptapuisi', [LandingSeniSastraCiptaPuisiController::class, "index"])
	->name('landing.senibudaya.senisastra.ciptapuisi.index');
Route::post('/senibudaya/senisastra/ciptapuisi', [LandingSeniSastraCiptaPuisiController::class, "store"])
	->name('landing.senibudaya.senisastra.ciptapuisi.store');
Route::get('/senibudaya/senisastra/ciptapuisi/success', [LandingSeniSastraCiptaPuisiController::class, "success"])
	->name('landing.senibudaya.senisastra.ciptapuisi.success');
Route::get('/dashboard/pendaftaran/senisastra/ciptapuisi', [DashboardSeniSastraCiptaPuisiController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senisastra.ciptapuisi.index');
Route::put('/dashboard/pendaftaran/senisastra/ciptapuisi', [DashboardSeniSastraCiptaPuisiController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senisastra.ciptapuisi.update');

/** BACA PUISI */
Route::get('/senibudaya/senisastra/bacapuisi', [LandingSeniSastraBacaPuisiController::class, "index"])
	->name('landing.senibudaya.senisastra.bacapuisi.index');
Route::post('/senibudaya/senisastra/bacapuisi', [LandingSeniSastraBacaPuisiController::class, "store"])
	->name('landing.senibudaya.senisastra.bacapuisi.store');
Route::get('/senibudaya/senisastra/bacapuisi/success', [LandingSeniSastraBacaPuisiController::class, "success"])
	->name('landing.senibudaya.senisastra.bacapuisi.success');
Route::get('/dashboard/pendaftaran/senisastra/bacapuisi', [DashboardSeniSastraBacaPuisiController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senisastra.bacapuisi.index');
Route::put('/dashboard/pendaftaran/senisastra/bacapuisi', [DashboardSeniSastraBacaPuisiController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senisastra.bacapuisi.update');

/** CIPTA CERPEN */
Route::get('/senibudaya/senisastra/ciptacerpen', [LandingSeniSastraCiptaCerpenController::class, "index"])
	->name('landing.senibudaya.senisastra.ciptacerpen.index');
Route::post('/senibudaya/senisastra/ciptacerpen', [LandingSeniSastraCiptaCerpenController::class, "store"])
	->name('landing.senibudaya.senisastra.ciptacerpen.store');
Route::get('/senibudaya/senisastra/ciptacerpen/success', [LandingSeniSastraCiptaCerpenController::class, "success"])
	->name('landing.senibudaya.senisastra.ciptacerpen.success');
Route::get('/dashboard/pendaftaran/senisastra/ciptacerpen', [DashboardSeniSastraCiptaCerpenController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senisastra.ciptacerpen.index');
Route::put('/dashboard/pendaftaran/senisastra/ciptacerpen', [DashboardSeniSastraCiptaCerpenController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senisastra.ciptacerpen.update');

/** MHQ */
Route::get('/senibudaya/senisastra/mhq', [LandingSeniSastraMhqController::class, "index"])
	->name('landing.senibudaya.senisastra.mhq.index');
Route::post('/senibudaya/senisastra/mhq', [LandingSeniSastraMhqController::class, "store"])
	->name('landing.senibudaya.senisastra.mhq.store');
Route::get('/senibudaya/senisastra/mhq/success', [LandingSeniSastraMhqController::class, "success"])
	->name('landing.senibudaya.senisastra.mhq.success');
Route::get('/dashboard/pendaftaran/senisastra/mhq', [DashboardSeniSastraMhqController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senisastra.mhq.index');
Route::put('/dashboard/pendaftaran/senisastra/mhq', [DashboardSeniSastraMhqController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senisastra.mhq.update');

/** MTQ */
Route::get('/senibudaya/senisastra/mtq', [LandingSeniSastraMtqController::class, "index"])
	->name('landing.senibudaya.senisastra.mtq.index');
Route::post('/senibudaya/senisastra/mtq', [LandingSeniSastraMtqController::class, "store"])
	->name('landing.senibudaya.senisastra.mtq.store');
Route::get('/senibudaya/senisastra/mtq/success', [LandingSeniSastraMtqController::class, "success"])
	->name('landing.senibudaya.senisastra.mtq.success');
Route::get('/dashboard/pendaftaran/senisastra/mtq', [DashboardSeniSastraMtqController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senisastra.mtq.index');
Route::put('/dashboard/pendaftaran/senisastra/mtq', [DashboardSeniSastraMtqController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senisastra.mtq.update');

/**
 * SENI TARI
 * - TARI TRADISIONAL
 * - TARI MODERN
 */
Route::get('/senibudaya/senitari', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senitari.index', ['api' => $api]);
})->name('landing.senibudaya.senitari.index');

/** TARI TRADISIONAL */
Route::get('/senibudaya/senitari/taritradisional', [LandingSeniTariTariTradisionalController::class, "index"])
	->name('landing.senibudaya.senitari.taritradisional.index');
Route::post('/senibudaya/senitari/taritradisional', [LandingSeniTariTariTradisionalController::class, "store"])
	->name('landing.senibudaya.senitari.taritradisional.store');
Route::get('/senibudaya/senitari/taritradisional/success', [LandingSeniTariTariTradisionalController::class, "success"])
	->name('landing.senibudaya.senitari.taritradisional.success');
Route::get('/dashboard/pendaftaran/senitari/taritradisional', [DashboardSeniTariTariTradisionalController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senitari.taritradisional.index');
Route::put('/dashboard/pendaftaran/senitari/taritradisional', [DashboardSeniTariTariTradisionalController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senitari.taritradisional.update');

/** TARI MODERN */
Route::get('/senibudaya/senitari/tarimodern', [LandingSeniTariTariModernController::class, "index"])
	->name('landing.senibudaya.senitari.tarimodern.index');
Route::post('/senibudaya/senitari/tarimodern', [LandingSeniTariTariModernController::class, "store"])
	->name('landing.senibudaya.senitari.tarimodern.store');
Route::get('/senibudaya/senitari/tarimodern/success', [LandingSeniTariTariModernController::class, "success"])
	->name('landing.senibudaya.senitari.tarimodern.success');
Route::get('/dashboard/pendaftaran/senitari/tarimodern', [DashboardSeniTariTariModernController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senitari.tarimodern.index');
Route::put('/dashboard/pendaftaran/senitari/tarimodern', [DashboardSeniTariTariModernController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senitari.tarimodern.update');


/**
 * SENI MUSIK [ok]
 * - SOLO VOCAL
 * - MUSIC GROUP
 */
Route::get('/senibudaya/senimusik', function () {
	$api = json_decode(file_get_contents(__DIR__ . "/../../resources/api/api.json"), true);
	return view('landing.senibudaya.senimusik.index', ['api' => $api]);
})->name('landing.senibudaya.senimusik.index');

/** SOLO VOCAL */
Route::get('/senibudaya/senimusik/solovocal', [LandingSeniMusikSoloVocalController::class, "index"])
	->name('landing.senibudaya.senimusik.solovocal.index');
Route::post('/senibudaya/senimusik/solovocal', [LandingSeniMusikSoloVocalController::class, "store"])
	->name('landing.senibudaya.senimusik.solovocal.store');
Route::get('/senibudaya/senimusik/solovocal/success', [LandingSeniMusikSoloVocalController::class, "success"])
	->name('landing.senibudaya.senimusik.solovocal.success');
Route::get('/dashboard/pendaftaran/senimusik/solovocal', [DashboardSeniMusikSoloVocalController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senimusik.solovocal.index');
Route::put('/dashboard/pendaftaran/senimusik/solovocal', [DashboardSeniMusikSoloVocalController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senimusik.solovocal.update');

/** MUSIC GROUP */
Route::get('/senibudaya/senimusik/musicgroup', [LandingSeniMusikMusicGroupController::class, "index"])
	->name('landing.senibudaya.senimusik.musicgroup.index');
Route::post('/senibudaya/senimusik/musicgroup', [LandingSeniMusikMusicGroupController::class, "store"])
	->name('landing.senibudaya.senimusik.musicgroup.store');
Route::get('/senibudaya/senimusik/musicgroup/success', [LandingSeniMusikMusicGroupController::class, "success"])
	->name('landing.senibudaya.senimusik.musicgroup.success');
Route::get('/dashboard/pendaftaran/senimusik/musicgroup', [DashboardSeniMusikMusicGroupController::class, 'index'])
	->middleware(['auth'])->name('pendaftaran.senimusik.musicgroup.index');
Route::put('/dashboard/pendaftaran/senimusik/musicgroup', [DashboardSeniMusikMusicGroupController::class, 'update'])
	->middleware(['auth'])->name('pendaftaran.senimusik.musicgroup.update');
