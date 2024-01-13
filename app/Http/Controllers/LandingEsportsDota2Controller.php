<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingEsportsDota2Controller extends Controller
{
	public $cabang_lomba = 'DOTA 2';
	public $whatsapp = 'https://api.whatsapp.com/send?phone=6287889874966';
	public $pamflet = 'img/olahraga/esports/dota2/pamflet.jpg';
	public $guidebook = 'https://drive.google.com/drive/folders/1EKn38Yw8vPnKOgF5WYB1ZPKLVt_OXeEj?usp=sharing';
	public $nominal = 'Rp20.000,00';
	public $maintenance = true;
	public $konfirmasi_bem = true;

	public function index()
	{
		$api = json_decode(file_get_contents(__DIR__ . "/../../../resources/api/api.json"), true);

		if ($this->maintenance)
			return view('landing.maintenance', ['api' => $api]);

		return view('landing.olahraga.esports.dota2', [
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
			"no_wa_ketua" => "required",

			"nama_ketua" => "required",
			"nim_jurusan_ketua" => "required",
			"ttl_ketua" => "required",
			"nickname_ketua" => "required",
			"id_game_ketua" => "required",
			"ktm_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_ketua" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_1" => "required",
			"nim_jurusan_anggota_1" => "required",
			"ttl_anggota_1" => "required",
			"nickname_anggota_1" => "required",
			"id_game_anggota_1" => "required",
			"ktm_anggota_1" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_1" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_2" => "required",
			"nim_jurusan_anggota_2" => "required",
			"ttl_anggota_2" => "required",
			"nickname_anggota_2" => "required",
			"id_game_anggota_2" => "required",
			"ktm_anggota_2" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_2" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_3" => "required",
			"nim_jurusan_anggota_3" => "required",
			"ttl_anggota_3" => "required",
			"nickname_anggota_3" => "required",
			"id_game_anggota_3" => "required",
			"ktm_anggota_3" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_3" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_4" => "required",
			"nim_jurusan_anggota_4" => "required",
			"ttl_anggota_4" => "required",
			"nickname_anggota_4" => "required",
			"id_game_anggota_4" => "required",
			"ktm_anggota_4" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_4" => "required|file|mimes:jpg,jpeg,png|max:2048",

			"nama_anggota_cadangan" => "required",
			"nim_jurusan_anggota_cadangan" => "required",
			"ttl_anggota_cadangan" => "required",
			"nickname_anggota_cadangan" => "required",
			"id_game_anggota_cadangan" => "required",
			"ktm_anggota_cadangan" => "required|file|mimes:jpg,jpeg,png|max:2048",
			"foto_anggota_cadangan" => "required|file|mimes:jpg,jpeg,png|max:2048",

		]);


		// LOKASI PENYIMPANAN: img/pendaftar/olahraga/debat/
		$ktm_ketua = $request->file('ktm_ketua');
		$ktm_anggota_1 = $request->file('ktm_anggota_1');
		$ktm_anggota_2 = $request->file('ktm_anggota_2');
		$ktm_anggota_3 = $request->file('ktm_anggota_3');
		$ktm_anggota_4 = $request->file('ktm_anggota_4');
		$ktm_anggota_cadangan = $request->file('ktm_anggota_cadangan');

		$foto_ketua = $request->file('foto_ketua');
		$foto_anggota_1 = $request->file('foto_anggota_1');
		$foto_anggota_2 = $request->file('foto_anggota_2');
		$foto_anggota_3 = $request->file('foto_anggota_3');
		$foto_anggota_4 = $request->file('foto_anggota_4');
		$foto_anggota_cadangan = $request->file('foto_anggota_cadangan');

		/**
		 * Menambahkan data input text ke database biar dapet row_id nya biar bisa
		 * membari nama file yang diupload sesuai rownya
		 */
		$row_id = DB::table('pendaftaran_esports_dota2')
			->insertGetId([
				'fakultas' => $request->input('fakultas'),
				'no_wa_ketua' => $request->input('no_wa_ketua'),

				'nama_ketua' => $request->input('nama_ketua'),
				'nim_jurusan_ketua' => $request->input('nim_jurusan_ketua'),
				'ttl_ketua' => $request->input('ttl_ketua'),
				'nickname_ketua' => $request->input('nickname_ketua'),
				'id_game_ketua' => $request->input('id_game_ketua'),

				'nama_anggota_1' => $request->input('nama_anggota_1'),
				'nim_jurusan_anggota_1' => $request->input('nim_jurusan_anggota_1'),
				'ttl_anggota_1' => $request->input('ttl_anggota_1'),
				'nickname_anggota_1' => $request->input('nickname_anggota_1'),
				'id_game_anggota_1' => $request->input('id_game_anggota_1'),

				'nama_anggota_2' => $request->input('nama_anggota_2'),
				'nim_jurusan_anggota_2' => $request->input('nim_jurusan_anggota_2'),
				'ttl_anggota_2' => $request->input('ttl_anggota_2'),
				'nickname_anggota_2' => $request->input('nickname_anggota_2'),
				'id_game_anggota_2' => $request->input('id_game_anggota_2'),

				'nama_anggota_3' => $request->input('nama_anggota_3'),
				'nim_jurusan_anggota_3' => $request->input('nim_jurusan_anggota_3'),
				'ttl_anggota_3' => $request->input('ttl_anggota_3'),
				'nickname_anggota_3' => $request->input('nickname_anggota_3'),
				'id_game_anggota_3' => $request->input('id_game_anggota_3'),

				'nama_anggota_4' => $request->input('nama_anggota_4'),
				'nim_jurusan_anggota_4' => $request->input('nim_jurusan_anggota_4'),
				'ttl_anggota_4' => $request->input('ttl_anggota_4'),
				'nickname_anggota_4' => $request->input('nickname_anggota_4'),
				'id_game_anggota_4' => $request->input('id_game_anggota_4'),

				'nama_anggota_cadangan' => $request->input('nama_anggota_cadangan'),
				'nim_jurusan_anggota_cadangan' => $request->input('nim_jurusan_anggota_cadangan'),
				'ttl_anggota_cadangan' => $request->input('ttl_anggota_cadangan'),
				'nickname_anggota_cadangan' => $request->input('nickname_anggota_cadangan'),
				'id_game_anggota_cadangan' => $request->input('id_game_anggota_cadangan'),

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
				'ketua' => $ktm_ketua ? $ktm_ketua->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $ktm_anggota_1 ? $ktm_anggota_1->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $ktm_anggota_2 ? $ktm_anggota_2->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $ktm_anggota_3 ? $ktm_anggota_3->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_4' => $ktm_anggota_4 ? $ktm_anggota_4->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_cadangan' => $ktm_anggota_cadangan ? $ktm_anggota_cadangan->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
			'foto' => [
				'ketua' => $foto_ketua ? $foto_ketua->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_1' => $foto_anggota_1 ? $foto_anggota_1->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_2' => $foto_anggota_2 ? $foto_anggota_2->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_3' => $foto_anggota_3 ? $foto_anggota_3->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_4' => $foto_anggota_4 ? $foto_anggota_4->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
				'anggota_cadangan' => $foto_anggota_cadangan ? $foto_anggota_cadangan->store('olahraga/esports/dota2/' . $row_id, ["disk" => 'pendaftaran']) : "",
			],
		];

		/**
		 * file sudah dipindahkan dan tiap-tiap file juga udah tercatat lokasi-lokasinya di array $nama_file
		 * sekarang tinggain di update isi tabelnya
		 */
		DB::table('pendaftaran_esports_dota2')
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
				
				'ktm_anggota_4' => $nama_file['ktm']['anggota_4'],
				'foto_anggota_4' => $nama_file['foto']['anggota_4'],
				
				'ktm_anggota_cadangan' => $nama_file['ktm']['anggota_cadangan'],
				'foto_anggota_cadangan' => $nama_file['foto']['anggota_cadangan'],
			]);

		return redirect()->route('landing.olahraga.esports.dota2.success')->with('status', 'SUKSES!');
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
			return redirect()->route('landing.olahraga.esports.dota2.index');
		}
	}
}
