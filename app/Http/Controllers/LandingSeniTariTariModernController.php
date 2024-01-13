<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingSeniTariTariModernController extends Controller
{
	public $cabang_lomba = 'Tari Modern';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6289509786155';
	public $pamflet = 'img/senibudaya/senitari/tarimodern/pamflet_revisi2.png';
	public $guidebook = 'https://drive.google.com/drive/folders/1wKeEQEOk_3Wckus7sQ7Gss9L8JIiHMhY?usp=sharing';
	public $maintenance = true;
	public $konfirmasi_bem = true;

	public function index() {
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
		
		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);
			
		return view('landing.senibudaya.senitari.tarimodern', [
			'api' => $api,
			'whatsapp' => $this->whatsapp,
			'cabang_lomba' => $this->cabang_lomba,
			'pamflet' => $this->pamflet,
			'guidebook' => $this->guidebook,
			'konfirmasi_bem' => $this->konfirmasi_bem,
		]);
	}

	public function store(Request $request) {
		/**
		 * Memvalidasi isi form agar sesuai dengan kriteria pendaftaran
		 * apabila ada salah satu yang gagal, maka pendaftaran akan meminta ulang
		 * untuk memasukkan data yang valid
		 */
		$request->validate([
			"fakultas" => "required",
			"judul_karya" => "required",
			"nama_ketua" => "required",
			"nim_ketua" => "required",
			"ttl_ketua" => "required",
			"alamat_ketua" => "required",
			"no_wa_ketua" => "required",
			"email_ketua" => "required",
			"jurusan_angkatan_ketua" => "required",
			"ktm_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			
			"ktm_anggota_1" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_anggota_2" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_anggota_3" => "file|mimes:jpg,jpeg,png|max:2048",
			"ktm_anggota_4" => "file|mimes:jpg,jpeg,png|max:2048",

			"foto_anggota_1" => "file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_2" => "file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_3" => "file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_4" => "file|mimes:jpg,jpeg,png|max:2048",
		]);		

		/**
		 * Menyiapkan jenis input apa saja yang merupakan formulir
		 * dalam bentuk file
		 */
		$ktm_ketua = $request->file('ktm_ketua');
		$ktm_anggota_1 = $request->file('ktm_anggota_1');
		$ktm_anggota_2 = $request->file('ktm_anggota_2');
		$ktm_anggota_3 = $request->file('ktm_anggota_3');
		$ktm_anggota_4 = $request->file('ktm_anggota_4');
		
		$foto_ketua = $request->file('foto_ketua');
		$foto_anggota_1 = $request->file('foto_anggota_1');
		$foto_anggota_2 = $request->file('foto_anggota_2');
		$foto_anggota_3 = $request->file('foto_anggota_3');
		$foto_anggota_4 = $request->file('foto_anggota_4');

		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_senitari_tarimodern')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),
				'judul_karya' => $request->input('judul_karya'),
				
				'nama_ketua' => $request->input('nama_ketua'),
				'nim_ketua' => $request->input('nim_ketua'),
				'ttl_ketua' => $request->input('ttl_ketua'),
				'alamat_ketua' => $request->input('alamat_ketua'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),
				'email_ketua' => $request->input('email_ketua'),
				'jurusan_angkatan_ketua' => $request->input('jurusan_angkatan_ketua'),
				
				'nama_anggota_1' => $request->input('nama_anggota_1'),
				'nim_anggota_1' => $request->input('nim_anggota_1'),
				'ttl_anggota_1' => $request->input('ttl_anggota_1'),
				'alamat_anggota_1' => $request->input('alamat_anggota_1'),
				'no_wa_anggota_1' => $request->input('no_wa_anggota_1'),
				'email_anggota_1' => $request->input('email_anggota_1'),
				'jurusan_angkatan_anggota_1' => $request->input('jurusan_angkatan_anggota_1'),
				
				'nama_anggota_2' => $request->input('nama_anggota_2'),
				'nim_anggota_2' => $request->input('nim_anggota_2'),
				'ttl_anggota_2' => $request->input('ttl_anggota_2'),
				'alamat_anggota_2' => $request->input('alamat_anggota_2'),
				'no_wa_anggota_2' => $request->input('no_wa_anggota_2'),
				'email_anggota_2' => $request->input('email_anggota_2'),
				'jurusan_angkatan_anggota_2' => $request->input('jurusan_angkatan_anggota_2'),
				
				'nama_anggota_3' => $request->input('nama_anggota_3'),
				'nim_anggota_3' => $request->input('nim_anggota_3'),
				'ttl_anggota_3' => $request->input('ttl_anggota_3'),
				'alamat_anggota_3' => $request->input('alamat_anggota_3'),
				'no_wa_anggota_3' => $request->input('no_wa_anggota_3'),
				'email_anggota_3' => $request->input('email_anggota_3'),
				'jurusan_angkatan_anggota_3' => $request->input('jurusan_angkatan_anggota_3'),
				
				'nama_anggota_4' => $request->input('nama_anggota_4'),
				'nim_anggota_4' => $request->input('nim_anggota_4'),
				'ttl_anggota_4' => $request->input('ttl_anggota_4'),
				'alamat_anggota_4' => $request->input('alamat_anggota_4'),
				'no_wa_anggota_4' => $request->input('no_wa_anggota_4'),
				'email_anggota_4' => $request->input('email_anggota_4'),
				'jurusan_angkatan_anggota_4' => $request->input('jurusan_angkatan_anggota_4'),
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
				'ketua' => $ktm_ketua ? $ktm_ketua->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $ktm_anggota_1 ? $ktm_anggota_1->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $ktm_anggota_2 ? $ktm_anggota_2->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $ktm_anggota_3 ? $ktm_anggota_3->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_4' => $ktm_anggota_4 ? $ktm_anggota_4->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $foto_anggota_1 ? $foto_anggota_1->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $foto_anggota_2 ? $foto_anggota_2->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $foto_anggota_3 ? $foto_anggota_3->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_4' => $foto_anggota_4 ? $foto_anggota_4->store('senibudaya/senitari/tarimodern/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_senitari_tarimodern')
			->where('id', '=', $row_id)
			->update([
				'ktm_ketua' => $nama_file['ktm']['ketua'],
				'ktm_anggota_1' => $nama_file['ktm']['anggota_1'],
				'ktm_anggota_2' => $nama_file['ktm']['anggota_2'],
				'ktm_anggota_3' => $nama_file['ktm']['anggota_3'],
				'ktm_anggota_4' => $nama_file['ktm']['anggota_4'],
				
				'foto_ketua' => $nama_file['foto']['ketua'],
				'foto_anggota_1' => $nama_file['foto']['anggota_1'],
				'foto_anggota_2' => $nama_file['foto']['anggota_2'],
				'foto_anggota_3' => $nama_file['foto']['anggota_3'],
				'foto_anggota_4' => $nama_file['foto']['anggota_4'],
			]);

		return redirect()->route('landing.senibudaya.senitari.tarimodern.success')->with('status', 'SUKSES!');
	}

	public function success() {
		if (session('status')) {
			$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);
			return view('landing.freesuccess', [
				'api' => $api,
				'whatsapp' => $this->whatsapp,
				'cabang_lomba' => $this->cabang_lomba,
			]);
		} else {
			return redirect()->route('landing.senibudaya.senitari.tarimodern.index');
		}
	}
}
