@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.olahraga.catur.perorangan.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="email">Email</label><br />
		<input id="email" type="text" name="email" value="{{ old('email') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="fakultas">Fakultas</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="id_lichess_peserta">Id Lichess Peserta</label><br />
		<input id="id_lichess_peserta" type="text" name="id_lichess_peserta" value="{{ old('id_lichess_peserta') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nama_peserta">Nama Peserta</label><br />
		<input id="nama_peserta" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="nim_jurusan_peserta">Nim Jurusan Peserta</label><br />
		<input id="nim_jurusan_peserta" type="text" name="nim_jurusan_peserta" value="{{ old('nim_jurusan_peserta') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="no_wa_peserta">No Wa Peserta</label><br />
		<input id="no_wa_peserta" type="text" name="no_wa_peserta" value="{{ old('no_wa_peserta') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="ktm_peserta">Ktm Peserta</label><br />
		<input id="ktm_peserta" type="file" name="ktm_peserta" value="{{ old('ktm_peserta') }}" class="form-control-file" />
	</div>
	<div class="form-group">
		<label for="foto_peserta">Foto Peserta</label><br />
		<input id="foto_peserta" type="file" name="foto_peserta" value="{{ old('foto_peserta') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection