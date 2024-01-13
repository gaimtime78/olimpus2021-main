<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingSeniMusikMusicGroupController extends Controller
{
	public $cabang_lomba = 'Music Group';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6282218771367';
	public $pamflet = 'img/senibudaya/senimusik/musicgroup/pamflet_revisi2.jpeg';
	public $guidebook = 'https://drive.google.com/folderview?id=1OEDh-baIaP_OL3K3NTJu4cn_LMt_XhRy';
	public $maintenance = true;
	public $konfirmasi_bem = true;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);
		
		return view('landing.senibudaya.senimusik.musicgroup', [
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
			"email" => "required",
			"fakultas" => "required",
			"judul_lagu" => "required",
			"nama_peserta_1" => "required",
			"no_wa_peserta_1" => "required",
			"nim_peserta_1" => "required",
			"foto_peserta_1" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"ktm_peserta_1" => "required|file|mimes:jpg,jpeg,png|max:2048",
		]);		

		/**
		 * Menyiapkan jenis input apa saja yang merupakan formulir
		 * dalam bentuk file
		 */
		$ktm_peserta_1 = $request->file('ktm_peserta_1');
		$ktm_peserta_2 = $request->file('ktm_peserta_2');
		$ktm_peserta_3 = $request->file('ktm_peserta_3');
		$ktm_peserta_4 = $request->file('ktm_peserta_4');
		$ktm_peserta_5 = $request->file('ktm_peserta_5');	
		$foto_peserta_1 = $request->file('foto_peserta_1');	
		$foto_peserta_2 = $request->file('foto_peserta_2');	
		$foto_peserta_3 = $request->file('foto_peserta_3');	
		$foto_peserta_4 = $request->file('foto_peserta_4');	
		$foto_peserta_5 = $request->file('foto_peserta_5');	

		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_senimusik_musicgroup')
			->insertGetId([
				'email' => $request->input('email'),
				'fakultas' => $request->input('fakultas'),
				'judul_lagu' => $request->input('judul_lagu'),

				'nama_peserta_1' => $request->input('nama_peserta_1'),
				'nim_peserta_1' => $request->input('nim_peserta_1'),
				'no_wa_peserta_1' => $request->input('no_wa_peserta_1'),
				
				'nama_peserta_2' => $request->input('nama_peserta_2'),
				'nim_peserta_2' => $request->input('nim_peserta_2'),
				'no_wa_peserta_2' => $request->input('no_wa_peserta_2'),
				
				'nama_peserta_3' => $request->input('nama_peserta_3'),
				'nim_peserta_3' => $request->input('nim_peserta_3'),
				'no_wa_peserta_3' => $request->input('no_wa_peserta_3'),
				
				'nama_peserta_4' => $request->input('nama_peserta_4'),
				'nim_peserta_4' => $request->input('nim_peserta_4'),
				'no_wa_peserta_4' => $request->input('no_wa_peserta_4'),
				
				'nama_peserta_5' => $request->input('nama_peserta_5'),
				'nim_peserta_5' => $request->input('nim_peserta_5'),
				'no_wa_peserta_5' => $request->input('no_wa_peserta_5'),
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
				'peserta_1' => $ktm_peserta_1 ? $ktm_peserta_1->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_2' => $ktm_peserta_2 ? $ktm_peserta_2->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_3' => $ktm_peserta_3 ? $ktm_peserta_3->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_4' => $ktm_peserta_4 ? $ktm_peserta_4->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_5' => $ktm_peserta_5 ? $ktm_peserta_5->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'peserta_1' => $foto_peserta_1 ? $foto_peserta_1->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_2' => $foto_peserta_2 ? $foto_peserta_2->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_3' => $foto_peserta_3 ? $foto_peserta_3->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_4' => $foto_peserta_4 ? $foto_peserta_4->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'peserta_5' => $foto_peserta_5 ? $foto_peserta_5->store('senibudaya/senimusik/musicgroup/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_senimusik_musicgroup')
			->where('id', '=', $row_id)
			->update([
				'ktm_peserta_1' => $nama_file['ktm']['peserta_1'],
				'ktm_peserta_2' => $nama_file['ktm']['peserta_2'],
				'ktm_peserta_3' => $nama_file['ktm']['peserta_3'],
				'ktm_peserta_4' => $nama_file['ktm']['peserta_4'],
				'ktm_peserta_5' => $nama_file['ktm']['peserta_5'],
				'foto_peserta_1' => $nama_file['foto']['peserta_1'],
				'foto_peserta_2' => $nama_file['foto']['peserta_2'],
				'foto_peserta_3' => $nama_file['foto']['peserta_3'],
				'foto_peserta_4' => $nama_file['foto']['peserta_4'],
				'foto_peserta_5' => $nama_file['foto']['peserta_5'],
			]);

		return redirect()->route('landing.senibudaya.senimusik.musicgroup.success')->with('status', 'SUKSES!');
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
			return redirect()->route('landing.senibudaya.senimusik.musicgroup.index');
		}
	}
}
