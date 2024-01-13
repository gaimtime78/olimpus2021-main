<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardSeniSastraCiptaPuisiController extends Controller
{
	public function index(Request $request) {
		$table_data_not_confirmed = DB::table('pendaftaran_senisastra_ciptapuisi')
			->where('konfirmasi', '=', false)
			->orderBy('id', 'ASC')
			->get();
		$table_data_confirmed = DB::table('pendaftaran_senisastra_ciptapuisi')
			->where('konfirmasi', '=', true)
			->orderBy('id', 'ASC')
			->get();
		return view('dashboard.pendaftaran.senibudaya.senisastra.ciptapuisi', [
			'table_data_not_confirmed' => $table_data_not_confirmed,
			'table_data_confirmed' => $table_data_confirmed,
		]);
	}
	public function update(Request $request) {
		$konfirmasi = true;
		if ($request->input('set_value') == "0") {
			$konfirmasi = false;
		}
		$row_id = intval($request->input('row_id'));
		DB::table('pendaftaran_senisastra_ciptapuisi')
			->where('id', '=', $row_id)
			->update(['konfirmasi' => $konfirmasi]);
		return redirect()->route('pendaftaran.senisastra.ciptapuisi.index');
	}
}
