@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.olahraga.esports.pointblank.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="fakultas">Fakultas</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="no_wa_ketua">No Wa Ketua</label><br />
		<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nama_ketua">Nama Ketua</label><br />
		<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_ketua">Nim Jurusan Ketua</label><br />
		<input id="nim_jurusan_ketua" type="text" name="nim_jurusan_ketua" value="{{ old('nim_jurusan_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_ketua">Tempat Tanggal Lahir Ketua</label><br />
		<input id="ttl_ketua" type="text" name="ttl_ketua" value="{{ old('ttl_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_ketua">Nickname (in game) Ketua</label><br />
		<input id="nickname_ketua" type="text" name="nickname_ketua" value="{{ old('nickname_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_ketua">Id Game Ketua</label><br />
		<input id="id_game_ketua" type="text" name="id_game_ketua" value="{{ old('id_game_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_ketua">Ktm Ketua</label><br />
		<input id="ktm_ketua" type="file" name="ktm_ketua" value="{{ old('ktm_ketua') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_ketua">Foto Ketua</label><br />
		<input id="foto_ketua" type="file" name="foto_ketua" value="{{ old('foto_ketua') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="nama_anggota_1">Nama Anggota 1</label><br />
		<input id="nama_anggota_1" type="text" name="nama_anggota_1" value="{{ old('nama_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_anggota_1">Nim Jurusan Anggota 1</label><br />
		<input id="nim_jurusan_anggota_1" type="text" name="nim_jurusan_anggota_1" value="{{ old('nim_jurusan_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_anggota_1">Tempat Tanggal Lahir Anggota 1</label><br />
		<input id="ttl_anggota_1" type="text" name="ttl_anggota_1" value="{{ old('ttl_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_anggota_1">Nickname (in game) Anggota 1</label><br />
		<input id="nickname_anggota_1" type="text" name="nickname_anggota_1" value="{{ old('nickname_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_anggota_1">Id Game Anggota 1</label><br />
		<input id="id_game_anggota_1" type="text" name="id_game_anggota_1" value="{{ old('id_game_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_1">Ktm Anggota 1</label><br />
		<input id="ktm_anggota_1" type="file" name="ktm_anggota_1" value="{{ old('ktm_anggota_1') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_1">Foto Anggota 1</label><br />
		<input id="foto_anggota_1" type="file" name="foto_anggota_1" value="{{ old('foto_anggota_1') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="nama_anggota_2">Nama Anggota 2</label><br />
		<input id="nama_anggota_2" type="text" name="nama_anggota_2" value="{{ old('nama_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_anggota_2">Nim Jurusan Anggota 2</label><br />
		<input id="nim_jurusan_anggota_2" type="text" name="nim_jurusan_anggota_2" value="{{ old('nim_jurusan_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_anggota_2">Tempat Tanggal Lahir Anggota 2</label><br />
		<input id="ttl_anggota_2" type="text" name="ttl_anggota_2" value="{{ old('ttl_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_anggota_2">Nickname (in game) Anggota 2</label><br />
		<input id="nickname_anggota_2" type="text" name="nickname_anggota_2" value="{{ old('nickname_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_anggota_2">Id Game Anggota 2</label><br />
		<input id="id_game_anggota_2" type="text" name="id_game_anggota_2" value="{{ old('id_game_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_2">Ktm Anggota 2</label><br />
		<input id="ktm_anggota_2" type="file" name="ktm_anggota_2" value="{{ old('ktm_anggota_2') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_2">Foto Anggota 2</label><br />
		<input id="foto_anggota_2" type="file" name="foto_anggota_2" value="{{ old('foto_anggota_2') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="nama_anggota_3">Nama Anggota 3</label><br />
		<input id="nama_anggota_3" type="text" name="nama_anggota_3" value="{{ old('nama_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_anggota_3">Nim Jurusan Anggota 3</label><br />
		<input id="nim_jurusan_anggota_3" type="text" name="nim_jurusan_anggota_3" value="{{ old('nim_jurusan_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_anggota_3">Tempat Tanggal Lahir Anggota 3</label><br />
		<input id="ttl_anggota_3" type="text" name="ttl_anggota_3" value="{{ old('ttl_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_anggota_3">Nickname (in game) Anggota 3</label><br />
		<input id="nickname_anggota_3" type="text" name="nickname_anggota_3" value="{{ old('nickname_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_anggota_3">Id Game Anggota 3</label><br />
		<input id="id_game_anggota_3" type="text" name="id_game_anggota_3" value="{{ old('id_game_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_3">Ktm Anggota 3</label><br />
		<input id="ktm_anggota_3" type="file" name="ktm_anggota_3" value="{{ old('ktm_anggota_3') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_3">Foto Anggota 3</label><br />
		<input id="foto_anggota_3" type="file" name="foto_anggota_3" value="{{ old('foto_anggota_3') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="nama_anggota_4">Nama Anggota 4</label><br />
		<input id="nama_anggota_4" type="text" name="nama_anggota_4" value="{{ old('nama_anggota_4') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_anggota_4">Nim Jurusan Anggota 4</label><br />
		<input id="nim_jurusan_anggota_4" type="text" name="nim_jurusan_anggota_4" value="{{ old('nim_jurusan_anggota_4') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_anggota_4">Tempat Tanggal Lahir Anggota 4</label><br />
		<input id="ttl_anggota_4" type="text" name="ttl_anggota_4" value="{{ old('ttl_anggota_4') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_anggota_4">Nickname (in game) Anggota 4</label><br />
		<input id="nickname_anggota_4" type="text" name="nickname_anggota_4" value="{{ old('nickname_anggota_4') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_anggota_4">Id Game Anggota 4</label><br />
		<input id="id_game_anggota_4" type="text" name="id_game_anggota_4" value="{{ old('id_game_anggota_4') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_4">Ktm Anggota 4</label><br />
		<input id="ktm_anggota_4" type="file" name="ktm_anggota_4" value="{{ old('ktm_anggota_4') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_4">Foto Anggota 4</label><br />
		<input id="foto_anggota_4" type="file" name="foto_anggota_4" value="{{ old('foto_anggota_4') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="nama_anggota_cadangan">Nama Anggota Cadangan</label><br />
		<input id="nama_anggota_cadangan" type="text" name="nama_anggota_cadangan" value="{{ old('nama_anggota_cadangan') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_anggota_cadangan">Nim Jurusan Anggota Cadangan</label><br />
		<input id="nim_jurusan_anggota_cadangan" type="text" name="nim_jurusan_anggota_cadangan" value="{{ old('nim_jurusan_anggota_cadangan') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ttl_anggota_cadangan">Tempat Tanggal Lahir Anggota Cadangan</label><br />
		<input id="ttl_anggota_cadangan" type="text" name="ttl_anggota_cadangan" value="{{ old('ttl_anggota_cadangan') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nickname_anggota_cadangan">Nickname (in game) Anggota Cadangan</label><br />
		<input id="nickname_anggota_cadangan" type="text" name="nickname_anggota_cadangan" value="{{ old('nickname_anggota_cadangan') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_game_anggota_cadangan">Id Game Anggota Cadangan</label><br />
		<input id="id_game_anggota_cadangan" type="text" name="id_game_anggota_cadangan" value="{{ old('id_game_anggota_cadangan') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_cadangan">Ktm Anggota Cadangan</label><br />
		<input id="ktm_anggota_cadangan" type="file" name="ktm_anggota_cadangan" value="{{ old('ktm_anggota_cadangan') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_cadangan">Foto Anggota Cadangan</label><br />
		<input id="foto_anggota_cadangan" type="file" name="foto_anggota_cadangan" value="{{ old('foto_anggota_cadangan') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection