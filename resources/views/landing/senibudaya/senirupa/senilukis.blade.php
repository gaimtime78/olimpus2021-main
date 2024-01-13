@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.senibudaya.senirupa.senilukis.store') }}" enctype="multipart/form-data">
	@csrf

	<!-- FORM EMAIL -->
	<div class="form-group">
		<label for="email">Email (required):</label><br />
		<input id="email" type="text" name="email" value="{{ old('email') }}" class="form-control" />
	</div>

	<!-- FORM FAKULTAS -->
	<div class="form-group">
		<label for="fakultas">Fakultas (required):</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA -->
	<div class="form-group">
		<label for="no_wa_peserta">No Whatsapp Peserta (required):</label><br />
		<input id="no_wa_peserta" type="text" name="no_wa_peserta" value="{{ old('no_wa_peserta') }}" class="form-control" />
	</div>

	<!-- FORM NAMA LENGKAP PESERTA -->
	<div class="form-group">
		<label for="nama_peserta">Nama Lengkap Peserta (required):</label><br />
		<input id="nama_peserta" type="text" name="nama_peserta" value="{{ old('nama_peserta') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA -->
	<div class="form-group">
		<label for="nim_peserta">NIM Peserta (required):</label><br />
		<input id="nim_peserta" type="text" name="nim_peserta" value="{{ old('nim_peserta') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA -->
	<div class="form-group">
		<label for="foto_peserta">Pas Foto Formal Peserta (Required):</label><br />
		<input id="foto_peserta" type="file" name="foto_peserta" value="{{ old('foto_peserta') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA -->
	<div class="form-group">
		<label for="ktm_peserta">KTM / KRS Ketua Semester Peserta (Required):</label><br />
		<input id="ktm_peserta" type="file" name="ktm_peserta" value="{{ old('ktm_peserta') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection