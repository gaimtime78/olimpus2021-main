<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingEsaiController extends Controller
{
	public $cabang_lomba = 'Esai';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6285156134515';
	public $pamflet = 'img/keilmiahan/esai/pamflet.png';
	public $guidebook = 'http://bit.ly/GuidebookEsaiOlimpus2021';
	public $nominal = 'Rp25.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = false;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);
		
		return view('landing.keilmiahan.esai', [
			'api' => $api,
			'whatsapp' => $this->whatsapp,
			'cabang_lomba' => $this->cabang_lomba,
			'pamflet' => $this->pamflet,
			'guidebook' => $this->guidebook,
			'konfirmasi_bem' => $this->konfirmasi_bem,
		]);
	}

	public function store(Request $request) {
		// return response()->json($request->input());
		$request->validate([
			"fakultas" => "required",
			"no_wa_ketua" => "required",

			"nama_ketua" => "required",
			"jurusan_ketua" => "required",
			"angkatan_ketua" => "required",
			"foto_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"ktm_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			
			"foto_anggota" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_anggota" => "file|mimes:jpg,jpeg,png|max:2048",
		]);
		

		// LOKASI PENYIMPANAN: img/pendaftar/keilmiahan/debat/
		$ktm_ketua = $request->file('ktm_ketua'); 	
		$ktm_anggota = $request->file('ktm_anggota');	

		$foto_ketua = $request->file('foto_ketua');
		$foto_anggota = $request->file('foto_anggota');


		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_esai')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),

				'nama_ketua' => $request->input('nama_ketua'),
				'jurusan_ketua' => $request->input('jurusan_ketua'),
				'angkatan_ketua' => $request->input('angkatan_ketua'),

				'nama_anggota' => $request->input('nama_anggota'),
				'jurusan_anggota' => $request->input('jurusan_anggota'),
				'angkatan_anggota' => $request->input('angkatan_anggota'),
			]);
		
		/**
		 * row_id udah dapet sekarang tinggal mindahin filenya ke folder public yang udah dibikin
		 * dan akhirnya tinggal mengupdate isi tabelnya sesuai row_id yang udah didapat tadi
		 * dengan lokasi filenya ktm dan foto dari ketua, ketua, dan anggota
		 * 
		 * perintah store itu berguna untuk memindahkan file sekaligus mereturn lokasi dari file
		 */
		$nama_file = [
			'ktm' => [
				'ketua' => $ktm_ketua ? $ktm_ketua->store('keilmiahan/esai/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota' => $ktm_anggota ? $ktm_anggota->store('keilmiahan/esai/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('keilmiahan/esai/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota' => $foto_anggota ? $foto_anggota->store('keilmiahan/esai/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_esai')
			->where('id', '=', $row_id)
			->update([
				'ktm_ketua' => $nama_file['ktm']['ketua'],
				'ktm_anggota' => $nama_file['ktm']['anggota'],
				'foto_ketua' => $nama_file['foto']['ketua'],
				'foto_anggota' => $nama_file['foto']['anggota'],
			]);

		return redirect()->route('landing.keilmiahan.esai.success')->with('status', 'SUKSES!');
	}

	public function success() {
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.success', [
				'api' => $api,
				'whatsapp' => $this->whatsapp,
				'cabang_lomba' => $this->cabang_lomba,
				'nominal' =>$this->nominal,
			]);
		} else {
			return redirect()->route('landing.keilmiahan.esai.index');
		}
	}
}
