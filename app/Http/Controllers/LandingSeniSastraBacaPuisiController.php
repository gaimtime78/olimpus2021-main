<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingSeniSastraBacaPuisiController extends Controller
{
	public $cabang_lomba = 'Baca Puisi';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6282266135254';
	public $pamflet = 'img/senibudaya/senisastra/bacapuisi/pamflet_revisi.png';
	public $guidebook = 'https://drive.google.com/drive/folders/1W-H8bmTg_0NO7ZgLqs4XHrtRUuA4dxZv?usp=sharing';
	public $maintenance = true;
	public $konfirmasi_bem = true;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);

		return view('landing.senibudaya.senisastra.bacapuisi', [
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
		/**
		 * Memvalidasi isi form agar sesuai dengan kriteria pendaftaran
		 * apabila ada salah satu yang gagal, maka pendaftaran akan meminta ulang
		 * untuk memasukkan data yang valid
		 */
		$request->validate([
			"email" => "required",
			"fakultas" => "required",
			"nama_peserta" => "required",
			"no_wa_peserta" => "required",
			"nim_peserta" => "required",
			"foto_peserta" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"ktm_peserta" => "required|file|mimes:jpg,jpeg,png|max:2048",
		]);

		/**
		 * Menyiapkan jenis input apa saja yang merupakan formulir
		 * dalam bentuk file
		 */
		$ktm_peserta = $request->file('ktm_peserta');
		$foto_peserta = $request->file('foto_peserta');


		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_senisastra_bacapuisi')
			->insertGetId([
				'email' => $request->input('email'),
				'fakultas' => $request->input('fakultas'),
				'no_wa_peserta' => $request->input('no_wa_peserta'),
				'nama_peserta' => $request->input('nama_peserta'),
				'nim_peserta' => $request->input('nim_peserta'),
			]);

		/**
		 * row_id udah dapet sekarang tinggal mindahin filenya ke folder public yang udah dibikin
		 * dan akhirnya tinggal mengupdate isi tabelnya sesuai row_id yang udah didapat tadi
		 * dengan lokasi filenya ktm dan foto dari ketua, anggota_1, dan anggota_2
		 * 
		 * perintah store itu berguna untuk memindahkan file sekaligus mereturn lokasi dari file
		 */
		$nama_file = [
			'ktm' => [
				'peserta' => $ktm_peserta ? $ktm_peserta->store('senibudaya/senisastra/bacapuisi/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'peserta' => $foto_peserta ? $foto_peserta->store('senibudaya/senisastra/bacapuisi/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_senisastra_bacapuisi')
			->where('id', '=', $row_id)
			->update([
				'ktm_peserta' => $nama_file['ktm']['peserta'],
				'foto_peserta' => $nama_file['foto']['peserta'],
			]);

		return redirect()->route('landing.senibudaya.senisastra.bacapuisi.success')->with('status', 'SUKSES!');
	}

	public function success()
	{
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.freesuccess', [
				'api' => $api,
				'whatsapp' => $this->whatsapp,
				'cabang_lomba' => $this->cabang_lomba,
			]);
		} else {
			return redirect()->route('landing.senibudaya.senisastra.bacapuisi.index');
		}
	}
}
