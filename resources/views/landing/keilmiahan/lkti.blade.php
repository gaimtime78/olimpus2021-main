@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.keilmiahan.lkti.store') }}" enctype="multipart/form-data">
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

	<!-- FORM WHATSAPP KETUA TIM -->
	<div class="form-group">
		<label for="no_wa_ketua">No Whatsapp Ketua TIM (required):</label><br />
		<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control" />
	</div>

	<!-- FORM NAMA LENGKAP KETUA TIM -->
	<div class="form-group">
		<label for="nama_ketua">Nama Lengkap Ketua TIM (required):</label><br />
		<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN KETUA TIM -->
	<div class="form-group">
		<label for="nim_jurusan_ketua">NIM / Jurusan Ketua TIM (required):</label><br />
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

	<!-- FORM NAMA ANGGOTA TIM -->
	<div class="form-group">
		<label for="nama_anggota_1">Nama Anggota TIM:</label><br />
		<input id="nama_anggota_1" type="text" name="nama_anggota_1" value="{{ old('nama_anggota_1') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN ANGGOTA TIM -->
	<div class="form-group">
		<label for="nim_jurusan_anggota_1">NIM / Jurusan Anggota TIM:</label><br />
		<input id="nim_jurusan_anggota_1" type="text" name="nim_jurusan_anggota_1" value="{{ old('nim_jurusan_anggota_1') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 1 -->
	<div class="form-group">
		<label for="foto_anggota_1">Pas Foto Formal Anggota 1:</label><br />
		<input id="foto_anggota_1" type="file" name="foto_anggota_1" value="{{ old('foto_anggota_1') }}" class="form-control-file" />
	</div>

	<!-- KTM / KRS ANGGOTA 1 -->
	<div class="form-group">
		<label for="ktm_anggota_1">KTM / KRS Anggota 1 Semester terakhir:</label><br />
		<input id="ktm_anggota_1" type="file" name="ktm_anggota_1" value="{{ old('ktm_anggota_1') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA TIM -->
	<div class="form-group">
		<label for="nama_anggota_2">Nama Anggota TIM:</label><br />
		<input id="nama_anggota_2" type="text" name="nama_anggota_2" value="{{ old('nama_anggota_2') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN ANGGOTA TIM -->
	<div class="form-group">
		<label for="nim_jurusan_anggota_2">NIM / Jurusan Anggota TIM:</label><br />
		<input id="nim_jurusan_anggota_2" type="text" name="nim_jurusan_anggota_2" value="{{ old('nim_jurusan_anggota_2') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 2 -->
	<div class="form-group">
		<label for="foto_anggota_2">Pas Foto Formal Anggota 2:</label><br />
		<input id="foto_anggota_2" type="file" name="foto_anggota_2" value="{{ old('foto_anggota_2') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS ANGGOTA 2 -->
	<div class="form-group">
		<label for="ktm_anggota_2">KTM / KRS Anggota 2 Semester terakhir:</label><br />
		<input id="ktm_anggota_2" type="file" name="ktm_anggota_2" value="{{ old('ktm_anggota_2') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection