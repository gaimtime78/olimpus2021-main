<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingDebatController extends Controller
{
	public $cabang_lomba = 'Debat';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6285713757204';
	public $pamflet = 'img/keilmiahan/debat/pamflet.jpg';
	public $guidebook = 'http://bit.ly/GuidebookDebatOlimpus21';
	public $nominal = 'Rp30.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = true;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);
		
		return view('landing.keilmiahan.debat', [
			'api' => $api,
			'whatsapp' => $this->whatsapp,
			'cabang_lomba' => $this->cabang_lomba,
			'pamflet' => $this->pamflet,
			'guidebook' => $this->guidebook,
			'konfirmasi_bem' => $this->konfirmasi_bem,
		]);
	}

	public function store(Request $request) {
		$request->validate([
			"nama_tim" => "required",
			"fakultas" => "required",

			"nama_speaker_1" => "required",
			"no_wa_speaker_1" => "required",
			"angkatan_nim_speaker_1" => "required",
			"foto_speaker_1" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"ktm_speaker_1" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_speaker_2" => "required",
			"no_wa_speaker_2" => "required",
			"angkatan_nim_speaker_2" => "required",
			"foto_speaker_2" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_speaker_2" => "file|mimes:jpg,jpeg,png|max:2048",

			"nama_speaker_3" => "required",
			"no_wa_speaker_3" => "required",
			"angkatan_nim_speaker_3" => "required",			
			"foto_speaker_3" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_speaker_3" => "file|mimes:jpg,jpeg,png|max:2048",
		]);
		

		// LOKASI PENYIMPANAN: img/pendaftar/keilmiahan/debat/
		$ktm_speaker_1 = $request->file('ktm_speaker_1'); 	
		$ktm_speaker_2 = $request->file('ktm_speaker_2');	
		$ktm_speaker_3 = $request->file('ktm_speaker_3');	

		$foto_speaker_1 = $request->file('foto_speaker_1');
		$foto_speaker_2 = $request->file('foto_speaker_2');
		$foto_speaker_3 = $request->file('foto_speaker_3');


		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_debat')
			->insertGetId([
				'nama_tim' => $request->input('nama_tim'),
				'fakultas' => $request->input('fakultas'),

				'nama_speaker_1' => $request->input('nama_speaker_1'),
				'no_wa_speaker_1' => $request->input('no_wa_speaker_1'),
				'angkatan_nim_speaker_1' => $request->input('angkatan_nim_speaker_1'),

				'nama_speaker_2' => $request->input('nama_speaker_2'),
				'no_wa_speaker_2' => $request->input('no_wa_speaker_2'),
				'angkatan_nim_speaker_2' => $request->input('angkatan_nim_speaker_2'),
				
				'nama_speaker_3' => $request->input('nama_speaker_3'),
				'no_wa_speaker_3' => $request->input('no_wa_speaker_3'),
				'angkatan_nim_speaker_3' => $request->input('angkatan_nim_speaker_3'),
			]);
		
		/**
		 * row_id udah dapet sekarang tinggal mindahin filenya ke folder public yang udah dibikin
		 * dan akhirnya tinggal mengupdate isi tabelnya sesuai row_id yang udah didapat tadi
		 * dengan lokasi filenya ktm dan foto dari speaker_1, speaker_1, dan speaker_2
		 * 
		 * perintah store itu berguna untuk memindahkan file sekaligus mereturn lokasi dari file
		 */
		$nama_file = [
			'ktm' => [
				'speaker_1' => $ktm_speaker_1 ? $ktm_speaker_1->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'speaker_2' => $ktm_speaker_2 ? $ktm_speaker_2->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'speaker_3' => $ktm_speaker_3 ? $ktm_speaker_3->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'speaker_1' => $foto_speaker_1 ? $foto_speaker_1->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'speaker_2' => $foto_speaker_2 ? $foto_speaker_2->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'speaker_3' => $foto_speaker_3 ? $foto_speaker_3->store('keilmiahan/debat/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_debat')
			->where('id', '=', $row_id)
			->update([
				'ktm_speaker_1' => $nama_file['ktm']['speaker_1'],
				'ktm_speaker_2' => $nama_file['ktm']['speaker_2'],
				'ktm_speaker_3' => $nama_file['ktm']['speaker_3'],
				'foto_speaker_1' => $nama_file['foto']['speaker_1'],
				'foto_speaker_2' => $nama_file['foto']['speaker_2'],
				'foto_speaker_3' => $nama_file['foto']['speaker_3'],
			]);

		return redirect()->route('landing.keilmiahan.debat.success')->with('status', 'SUKSES!');
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
			return redirect()->route('landing.keilmiahan.debat.index');
		}
	}
}
