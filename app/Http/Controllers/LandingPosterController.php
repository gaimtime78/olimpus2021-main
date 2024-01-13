<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPosterController extends Controller
{
	public $cabang_lomba = 'Poster';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=628128739571';
	public $pamflet = 'img/keilmiahan/poster/pamflet.jpg';
	public $guidebook = 'http://bit.ly/PosterOlimpus2021';
	public $nominal = 'Rp15.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = false;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);
		
		return view('landing.keilmiahan.poster', [
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

			"nama_ketua" => "required",
			"nim_jurusan_ketua" => "required",
			"no_wa_ketua" => "required",
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
		$row_id = DB::table('pendaftaran_poster')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),

				'nama_ketua' => $request->input('nama_ketua'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),
				'nim_jurusan_ketua' => $request->input('nim_jurusan_ketua'),

				'nama_anggota' => $request->input('nama_anggota'),
				'no_wa_anggota' => $request->input('no_wa_anggota'),
				'nim_jurusan_anggota' => $request->input('nim_jurusan_anggota'),
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
				'ketua' => $ktm_ketua ? $ktm_ketua->store('keilmiahan/poster/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota' => $ktm_anggota ? $ktm_anggota->store('keilmiahan/poster/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('keilmiahan/poster/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota' => $foto_anggota ? $foto_anggota->store('keilmiahan/poster/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_poster')
			->where('id', '=', $row_id)
			->update([
				'ktm_ketua' => $nama_file['ktm']['ketua'],
				'ktm_anggota' => $nama_file['ktm']['anggota'],
				'foto_ketua' => $nama_file['foto']['ketua'],
				'foto_anggota' => $nama_file['foto']['anggota'],
			]);

		return redirect()->route('landing.keilmiahan.poster.success')->with('status', 'SUKSES!');
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
			return redirect()->route('landing.keilmiahan.poster.index');
		}
	}
}
