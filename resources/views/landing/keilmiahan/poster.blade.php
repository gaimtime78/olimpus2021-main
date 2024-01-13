@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.keilmiahan.poster.store') }}" enctype="multipart/form-data">
	@csrf

	<!-- FORM FAKULTAS -->
	<div class="form-group">
		<label for="fakultas">Fakultas (required):</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>

	<!-- FORM NAMA LENGKAP KETUA -->
	<div class="form-group">
		<label for="nama_ketua">Nama Lengkap Ketua (required):</label><br />
		<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM WHATSAPP KETUA -->
	<div class="form-group">
		<label for="no_wa_ketua">No Whatsapp Ketua (required):</label><br />
		<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control" />
	</div>

	<!-- JURUSAN KETUA -->
	<div class="form-group">
		<label for="nim_jurusan_ketua">NIM / Jurusan Ketua (required):</label><br />
		<input id="nim_jurusan_ketua" type="text" name="nim_jurusan_ketua" value="{{ old('nim_jurusan_ketua') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL KETUA -->
	<div class="form-group">
		<label for="foto_ketua">Pas Foto Formal Ketua (Required):</label><br />
		<input id="foto_ketua" type="file" name="foto_ketua" value="{{ old('foto_ketua') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS KETUA -->
	<div class="form-group">
		<label for="ktm_ketua">KTM / KRS Ketua Semester terakhir (Required):</label><br />
		<input id="ktm_ketua" type="file" name="ktm_ketua" value="{{ old('ktm_ketua') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA -->
	<div class="form-group">
		<label for="nama_anggota">Nama Anggota:</label><br />
		<input id="nama_anggota" type="text" name="nama_anggota" value="{{ old('nama_anggota') }}" class="form-control" />
	</div>
	
	<!-- FORM WHATSAPP ANGGOTA -->
	<div class="form-group">
		<label for="no_wa_anggota">No Whatsapp Anggota:</label><br />
		<input id="no_wa_anggota" type="text" name="no_wa_anggota" value="{{ old('no_wa_anggota') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN ANGGOTA -->
	<div class="form-group">
		<label for="nim_jurusan_anggota">NIM / Jurusan Anggota:</label><br />
		<input id="nim_jurusan_anggota" type="text" name="nim_jurusan_anggota" value="{{ old('nim_jurusan_anggota') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA -->
	<div class="form-group">
		<label for="foto_anggota">Pas Foto Formal Anggota</label><br />
		<input id="foto_anggota" type="file" name="foto_anggota" value="{{ old('foto_anggota') }}" class="form-control-file" />
	</div>

	<!-- KTM / KRS ANGGOTA -->
	<div class="form-group">
		<label for="ktm_anggota">KTM / KRS Anggota Semester terakhir:</label><br />
		<input id="ktm_anggota" type="file" name="ktm_anggota" value="{{ old('ktm_anggota') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection