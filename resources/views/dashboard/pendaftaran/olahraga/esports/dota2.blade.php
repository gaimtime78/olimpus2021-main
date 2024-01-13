@extends("layouts.app")

@section("content")
<h2>Pendaftaran DOTA 2</h2>

<!-- DATA YANG SUDAH TERKONFIRMASI -->
<h3>Sudah Terkonfirmasi</h3>
@if (count($table_data_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Fakultas</th>
		<th>No Wa Ketua</th>
		<th>Nama Ketua</th>
		<th>Nim Jurusan Ketua</th>
		<th>Ttl Ketua</th>
		<th>Nickname Ketua</th>
		<th>Id Game Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		<th>Nama Anggota 1</th>
		<th>Nim Jurusan Anggota 1</th>
		<th>Ttl Anggota 1</th>
		<th>Nickname Anggota 1</th>
		<th>Id Game Anggota 1</th>
		<th>Ktm Anggota 1</th>
		<th>Foto Anggota 1</th>
		<th>Nama Anggota 2</th>
		<th>Nim Jurusan Anggota 2</th>
		<th>Ttl Anggota 2</th>
		<th>Nickname Anggota 2</th>
		<th>Id Game Anggota 2</th>
		<th>Ktm Anggota 2</th>
		<th>Foto Anggota 2</th>
		<th>Nama Anggota 3</th>
		<th>Nim Jurusan Anggota 3</th>
		<th>Ttl Anggota 3</th>
		<th>Nickname Anggota 3</th>
		<th>Id Game Anggota 3</th>
		<th>Ktm Anggota 3</th>
		<th>Foto Anggota 3</th>
		<th>Nama Anggota 4</th>
		<th>Nim Jurusan Anggota 4</th>
		<th>Ttl Anggota 4</th>
		<th>Nickname Anggota 4</th>
		<th>Id Game Anggota 4</th>
		<th>Ktm Anggota 4</th>
		<th>Foto Anggota 4</th>
		<th>Nama Anggota Cadangan</th>
		<th>Nim Jurusan Anggota Cadangan</th>
		<th>Ttl Anggota Cadangan</th>
		<th>Nickname Anggota Cadangan</th>
		<th>Id Game Anggota Cadangan</th>
		<th>Ktm Anggota Cadangan</th>
		<th>Foto Anggota Cadangan</th>

	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.esports.dota2.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="0" />
				<input type="submit" value="batalkan" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->ttl_ketua }}</td>
		<td>{{ $row->nickname_ketua }}</td>
		<td>{{ $row->id_game_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>
		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_jurusan_anggota_1 }}</td>
		<td>{{ $row->ttl_anggota_1 }}</td>
		<td>{{ $row->nickname_anggota_1 }}</td>
		<td>{{ $row->id_game_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>
		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_jurusan_anggota_2 }}</td>
		<td>{{ $row->ttl_anggota_2 }}</td>
		<td>{{ $row->nickname_anggota_2 }}</td>
		<td>{{ $row->id_game_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>
		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_jurusan_anggota_3 }}</td>
		<td>{{ $row->ttl_anggota_3 }}</td>
		<td>{{ $row->nickname_anggota_3 }}</td>
		<td>{{ $row->id_game_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
		</td>
		<td>{{ $row->nama_anggota_4 }}</td>
		<td>{{ $row->nim_jurusan_anggota_4 }}</td>
		<td>{{ $row->ttl_anggota_4 }}</td>
		<td>{{ $row->nickname_anggota_4 }}</td>
		<td>{{ $row->id_game_anggota_4 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_4) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_4) }}" />
		</td>
		<td>{{ $row->nama_anggota_cadangan }}</td>
		<td>{{ $row->nim_jurusan_anggota_cadangan }}</td>
		<td>{{ $row->ttl_anggota_cadangan }}</td>
		<td>{{ $row->nickname_anggota_cadangan }}</td>
		<td>{{ $row->id_game_anggota_cadangan }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_cadangan) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_cadangan) }}" />
		</td>


	</tr>
	@endforeach
</table>
@endif

<!-- DATA YANG BELUM TERKONFIRMASI -->
<h3>Belum Terkonfirmasi</h3>
@if (count($table_data_not_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Fakultas</th>
		<th>No Wa Ketua</th>
		<th>Nama Ketua</th>
		<th>Nim Jurusan Ketua</th>
		<th>Ttl Ketua</th>
		<th>Nickname Ketua</th>
		<th>Id Game Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		<th>Nama Anggota 1</th>
		<th>Nim Jurusan Anggota 1</th>
		<th>Ttl Anggota 1</th>
		<th>Nickname Anggota 1</th>
		<th>Id Game Anggota 1</th>
		<th>Ktm Anggota 1</th>
		<th>Foto Anggota 1</th>
		<th>Nama Anggota 2</th>
		<th>Nim Jurusan Anggota 2</th>
		<th>Ttl Anggota 2</th>
		<th>Nickname Anggota 2</th>
		<th>Id Game Anggota 2</th>
		<th>Ktm Anggota 2</th>
		<th>Foto Anggota 2</th>
		<th>Nama Anggota 3</th>
		<th>Nim Jurusan Anggota 3</th>
		<th>Ttl Anggota 3</th>
		<th>Nickname Anggota 3</th>
		<th>Id Game Anggota 3</th>
		<th>Ktm Anggota 3</th>
		<th>Foto Anggota 3</th>
		<th>Nama Anggota 4</th>
		<th>Nim Jurusan Anggota 4</th>
		<th>Ttl Anggota 4</th>
		<th>Nickname Anggota 4</th>
		<th>Id Game Anggota 4</th>
		<th>Ktm Anggota 4</th>
		<th>Foto Anggota 4</th>
		<th>Nama Anggota Cadangan</th>
		<th>Nim Jurusan Anggota Cadangan</th>
		<th>Ttl Anggota Cadangan</th>
		<th>Nickname Anggota Cadangan</th>
		<th>Id Game Anggota Cadangan</th>
		<th>Ktm Anggota Cadangan</th>
		<th>Foto Anggota Cadangan</th>

	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_not_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.esports.dota2.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="1" />
				<input type="submit" value="konfirmasi" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->ttl_ketua }}</td>
		<td>{{ $row->nickname_ketua }}</td>
		<td>{{ $row->id_game_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>
		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_jurusan_anggota_1 }}</td>
		<td>{{ $row->ttl_anggota_1 }}</td>
		<td>{{ $row->nickname_anggota_1 }}</td>
		<td>{{ $row->id_game_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>
		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_jurusan_anggota_2 }}</td>
		<td>{{ $row->ttl_anggota_2 }}</td>
		<td>{{ $row->nickname_anggota_2 }}</td>
		<td>{{ $row->id_game_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>
		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_jurusan_anggota_3 }}</td>
		<td>{{ $row->ttl_anggota_3 }}</td>
		<td>{{ $row->nickname_anggota_3 }}</td>
		<td>{{ $row->id_game_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
		</td>
		<td>{{ $row->nama_anggota_4 }}</td>
		<td>{{ $row->nim_jurusan_anggota_4 }}</td>
		<td>{{ $row->ttl_anggota_4 }}</td>
		<td>{{ $row->nickname_anggota_4 }}</td>
		<td>{{ $row->id_game_anggota_4 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_4) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_4) }}" />
		</td>
		<td>{{ $row->nama_anggota_cadangan }}</td>
		<td>{{ $row->nim_jurusan_anggota_cadangan }}</td>
		<td>{{ $row->ttl_anggota_cadangan }}</td>
		<td>{{ $row->nickname_anggota_cadangan }}</td>
		<td>{{ $row->id_game_anggota_cadangan }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_cadangan) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_cadangan) }}" />
		</td>


	</tr>
	@endforeach
</table>
@endif
@endsection