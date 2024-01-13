<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingCaturBereguController extends Controller
{
	public $cabang_lomba = 'Catur Beregu';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6282223724415';
	public $pamflet = 'img/olahraga/catur/beregu/pamflet.png';
	public $guidebook = 'https://bit.ly/CaturOlimpus2021';
	public $nominal = 'Rp50.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = false;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);

		return view('landing.olahraga.catur.beregu', [
			'api' => $api,
			'whatsapp' => $this->whatsapp,
			'cabang_lomba' => $this->cabang_lomba,
			'pamflet' => $this->pamflet,
			'guidebook' => $this->guidebook,
			'konfirmasi_bem' => $this->konfirmasi_bem,
		]);
	}

	public function store(Request $request)
	{
		$request->validate([
			"fakultas" => "required",
			"email" => "required",

			"nama_ketua" => "required",
			"nim_jurusan_ketua" => "required",
			"no_wa_ketua" => "required",
			"ktm_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_1" => "required",
			"nim_jurusan_anggota_1" => "required",
			"no_wa_anggota_1" => "required",
			"ktm_anggota_1" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_1" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_2" => "required",
			"nim_jurusan_anggota_2" => "required",
			"no_wa_anggota_2" => "required",
			"ktm_anggota_2" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_2" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_3" => "required",
			"nim_jurusan_anggota_3" => "required",
			"no_wa_anggota_3" => "required",
			"ktm_anggota_3" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_3" => "required|file|mimes:jpg,jpeg,png|max:2048",

			
			"id_lichess_tim" => "required",
			"id_lichess_ketua" => "required",
			"id_lichess_anggota_1" => "required",
			"id_lichess_anggota_2" => "required",
			"id_lichess_anggota_3" => "required",

		]);


		// LOKASI PENYIMPANAN: img/pendaftar/olahraga/debat/
		$ktm_ketua = $request->file('ktm_ketua');
		$ktm_anggota_1 = $request->file('ktm_anggota_1');
		$ktm_anggota_2 = $request->file('ktm_anggota_2');
		$ktm_anggota_3 = $request->file('ktm_anggota_3');

		$foto_ketua = $request->file('foto_ketua');
		$foto_anggota_1 = $request->file('foto_anggota_1');
		$foto_anggota_2 = $request->file('foto_anggota_2');
		$foto_anggota_3 = $request->file('foto_anggota_3');

		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_catur_beregu')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),
				'email' => $request->input('email'),

				'nama_ketua' => $request->input('nama_ketua'),
				'nim_jurusan_ketua' => $request->input('nim_jurusan_ketua'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),

				'nama_anggota_1' => $request->input('nama_anggota_1'),
				'nim_jurusan_anggota_1' => $request->input('nim_jurusan_anggota_1'),
				'no_wa_anggota_1' => $request->input('no_wa_anggota_1'),

				'nama_anggota_2' => $request->input('nama_anggota_2'),
				'nim_jurusan_anggota_2' => $request->input('nim_jurusan_anggota_2'),
				'no_wa_anggota_2' => $request->input('no_wa_anggota_2'),

				'nama_anggota_3' => $request->input('nama_anggota_3'),
				'nim_jurusan_anggota_3' => $request->input('nim_jurusan_anggota_3'),
				'no_wa_anggota_3' => $request->input('no_wa_anggota_3'),

				
				'id_lichess_tim' => $request->input('id_lichess_tim'),
				'id_lichess_ketua' => $request->input('id_lichess_ketua'),
				'id_lichess_anggota_1' => $request->input('id_lichess_anggota_1'),
				'id_lichess_anggota_2' => $request->input('id_lichess_anggota_2'),
				'id_lichess_anggota_3' => $request->input('id_lichess_anggota_3'),

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
				'ketua' => $ktm_ketua ? $ktm_ketua->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $ktm_anggota_1 ? $ktm_anggota_1->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $ktm_anggota_2 ? $ktm_anggota_2->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $ktm_anggota_3 ? $ktm_anggota_3->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $foto_anggota_1 ? $foto_anggota_1->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $foto_anggota_2 ? $foto_anggota_2->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $foto_anggota_3 ? $foto_anggota_3->store('olahraga/catur/beregu/' . $row_id, ["disk" => 'pendaftaran']) : "",
			]
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_catur_beregu')
			->where('id', '=', $row_id)
			->update([
				'ktm_ketua' => $nama_file['ktm']['ketua'],
				'foto_ketua' => $nama_file['foto']['ketua'],

				'ktm_anggota_1' => $nama_file['ktm']['anggota_1'],
				'foto_anggota_1' => $nama_file['foto']['anggota_1'],

				'ktm_anggota_2' => $nama_file['ktm']['anggota_2'],
				'foto_anggota_2' => $nama_file['foto']['anggota_2'],

				'ktm_anggota_3' => $nama_file['ktm']['anggota_3'],
				'foto_anggota_3' => $nama_file['foto']['anggota_3'],

			]);

		return redirect()->route('landing.olahraga.catur.beregu.success')->with('status', 'SUKSES!');
	}

	public function success()
	{
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.success', [
				'api' => $api,
				'whatsapp' => $this->whatsapp,
				'cabang_lomba' => $this->cabang_lomba,
				'nominal' => $this->nominal,
			]);
		} else {
			return redirect()->route('landing.olahraga.catur.beregu.index');
		}
	}
}
