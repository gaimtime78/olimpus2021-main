@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.olahraga.catur.beregu.store') }}" enctype="multipart/form-data">
	@csrf
	<div>
		<label for="email">Email</label><br />
		<input id="email" type="text" name="email" value="{{ old('email') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="fakultas">Fakultas</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_tim">Link Lichess Tim</label><br />
		<input id="id_lichess_tim" type="text" name="id_lichess_tim" value="{{ old('id_lichess_tim') }}" class="form-control" />
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
		<label for="no_wa_ketua">No Wa Ketua</label><br />
		<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_ketua">Id Lichess Ketua</label><br />
		<input id="id_lichess_ketua" type="text" name="id_lichess_ketua" value="{{ old('id_lichess_ketua') }}" class="form-control" />
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
		<label for="no_wa_anggota_1">No Wa Anggota 1</label><br />
		<input id="no_wa_anggota_1" type="text" name="no_wa_anggota_1" value="{{ old('no_wa_anggota_1') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_anggota_1">Id Lichess Anggota 1</label><br />
		<input id="id_lichess_anggota_1" type="text" name="id_lichess_anggota_1" value="{{ old('id_lichess_anggota_1') }}" class="form-control" />
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
		<label for="no_wa_anggota_2">No Wa Anggota 2</label><br />
		<input id="no_wa_anggota_2" type="text" name="no_wa_anggota_2" value="{{ old('no_wa_anggota_2') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_anggota_2">Id Lichess Anggota 2</label><br />
		<input id="id_lichess_anggota_2" type="text" name="id_lichess_anggota_2" value="{{ old('id_lichess_anggota_2') }}" class="form-control" />
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
		<label for="no_wa_anggota_3">No Wa Anggota 3</label><br />
		<input id="no_wa_anggota_3" type="text" name="no_wa_anggota_3" value="{{ old('no_wa_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_anggota_3">Id Lichess Anggota 3</label><br />
		<input id="id_lichess_anggota_3" type="text" name="id_lichess_anggota_3" value="{{ old('id_lichess_anggota_3') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_anggota_3">Ktm Anggota 3</label><br />
		<input id="ktm_anggota_3" type="file" name="ktm_anggota_3" value="{{ old('ktm_anggota_3') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_anggota_3">Foto Anggota 3</label><br />
		<input id="foto_anggota_3" type="file" name="foto_anggota_3" value="{{ old('foto_anggota_3') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection
