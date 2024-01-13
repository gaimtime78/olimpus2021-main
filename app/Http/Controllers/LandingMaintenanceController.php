<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingMaintenanceController extends Controller
{
	public function index() {
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
		return view('landing.maintenance', [
			'api' => $api,
		]);
	}

}
