<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingCaturPeroranganController extends Controller
{
	public $cabang_lomba = 'Catur Perorangan';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6282223724415';
	public $pamflet = 'img/olahraga/catur/perorangan/pamflet.png';
	public $guidebook = 'https://bit.ly/CaturOlimpus2021';
	public $nominal = 'Rp25.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = false;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);

		return view('landing.olahraga.catur.perorangan', [
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
			
			"id_lichess_peserta" => "required",

			"nama_peserta" => "required",
			"nim_jurusan_peserta" => "required",
			"no_wa_peserta" => "required",
			"ktm_peserta" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_peserta" => "required|file|mimes:jpg,jpeg,png|max:2048",

		]);


		// LOKASI PENYIMPANAN: img/pendaftar/olahraga/debat/
		$ktm_peserta = $request->file('ktm_peserta');

		$foto_peserta = $request->file('foto_peserta');

		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_catur_perorangan')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),
				'email' => $request->input('email'),

				'id_lichess_peserta' => $request->input('id_lichess_peserta'),

				'nama_peserta' => $request->input('nama_peserta'),
				'nim_jurusan_peserta' => $request->input('nim_jurusan_peserta'),
				'no_wa_peserta' => $request->input('no_wa_peserta'),


			]);

		/**
		 * row_id udah dapet sekarang tinggal mindahin filenya ke folder public yang udah dibikin
		 * dan akhirnya tinggal mengupdate isi tabelnya sesuai row_id yang udah didapat tadi
		 * dengan lokasi filenya ktm dan foto dari peserta, peserta, dan anggota
		 * 
		 * perintah store itu berguna untuk memindahkan file sekaligus mereturn lokasi dari file
		 */
		$nama_file = [
			'ktm' => [
				'peserta' => $ktm_peserta ? $ktm_peserta->store('olahraga/catur/perorangan/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'peserta' => $foto_peserta ? $foto_peserta->store('olahraga/catur/perorangan/' . $row_id, ["disk" => 'pendaftaran']) : "",
			]
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_catur_perorangan')
			->where('id', '=', $row_id)
			->update([
				'ktm_peserta' => $nama_file['ktm']['peserta'],
				'foto_peserta' => $nama_file['foto']['peserta'],

			]);

		return redirect()->route('landing.olahraga.catur.perorangan.success')->with('status', 'SUKSES!');
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
			return redirect()->route('landing.olahraga.catur.perorangan.index');
		}
	}
}
