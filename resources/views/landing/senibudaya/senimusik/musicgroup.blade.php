@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.senibudaya.senimusik.musicgroup.store') }}" enctype="multipart/form-data">
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

	<!-- FORM JUDUL LAGU -->
	<div class="form-group">
		<label for="judul_lagu">Judul lagu (required):</label><br />
		<input id="judul_lagu" type="text" name="judul_lagu" value="{{ old('judul_lagu') }}" class="form-control" />
	</div>

	<!-- FORM NAMA LENGKAP PESERTA 1 -->
	<div class="form-group">
		<label for="nama_peserta_1">Nama Lengkap Peserta 1 (required):</label><br />
		<input id="nama_peserta_1" type="text" name="nama_peserta_1" value="{{ old('nama_peserta_1') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA 1 -->
	<div class="form-group">
		<label for="no_wa_peserta_1">No Whatsapp Peserta 1 (required):</label><br />
		<input id="no_wa_peserta_1" type="text" name="no_wa_peserta_1" value="{{ old('no_wa_peserta_1') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA 1 -->
	<div class="form-group">
		<label for="nim_peserta_1">NIM Peserta 1 (required):</label><br />
		<input id="nim_peserta_1" type="text" name="nim_peserta_1" value="{{ old('nim_peserta_1') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA 1 -->
	<div class="form-group">
		<label for="foto_peserta_1">Pas Foto Formal Peserta 1 (Required):</label><br />
		<input id="foto_peserta_1" type="file" name="foto_peserta_1" value="{{ old('foto_peserta_1') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA 1 -->
	<div class="form-group">
		<label for="ktm_peserta_1">KTM / KRS Ketua Semester Peserta 1 (Required):</label><br />
		<input id="ktm_peserta_1" type="file" name="ktm_peserta_1" value="{{ old('ktm_peserta_1') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA LENGKAP PESERTA 2 -->
	<div class="form-group">
		<label for="nama_peserta_2">Nama Lengkap Peserta 2:</label><br />
		<input id="nama_peserta_2" type="text" name="nama_peserta_2" value="{{ old('nama_peserta_2') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA 2 -->
	<div class="form-group">
		<label for="no_wa_peserta_2">No Whatsapp Peserta 2:</label><br />
		<input id="no_wa_peserta_2" type="text" name="no_wa_peserta_2" value="{{ old('no_wa_peserta_2') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA 2 -->
	<div class="form-group">
		<label for="nim_peserta_2">NIM Peserta 2:</label><br />
		<input id="nim_peserta_2" type="text" name="nim_peserta_2" value="{{ old('nim_peserta_2') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA 2 -->
	<div class="form-group">
		<label for="foto_peserta_2">Pas Foto Formal Peserta 2:</label><br />
		<input id="foto_peserta_2" type="file" name="foto_peserta_2" value="{{ old('foto_peserta_2') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA 2 -->
	<div class="form-group">
		<label for="ktm_peserta_2">KTM / KRS Ketua Semester Peserta 2:</label><br />
		<input id="ktm_peserta_2" type="file" name="ktm_peserta_2" value="{{ old('ktm_peserta_2') }}" class="form-control-file" />
	</div>


	<!-- FORM NAMA LENGKAP PESERTA 3 -->
	<div class="form-group">
		<label for="nama_peserta_3">Nama Lengkap Peserta 3:</label><br />
		<input id="nama_peserta_3" type="text" name="nama_peserta_3" value="{{ old('nama_peserta_3') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA 3 -->
	<div class="form-group">
		<label for="no_wa_peserta_3">No Whatsapp Peserta 3:</label><br />
		<input id="no_wa_peserta_3" type="text" name="no_wa_peserta_3" value="{{ old('no_wa_peserta_3') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA 3 -->
	<div class="form-group">
		<label for="nim_peserta_3">NIM Peserta 3:</label><br />
		<input id="nim_peserta_3" type="text" name="nim_peserta_3" value="{{ old('nim_peserta_3') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA 3 -->
	<div class="form-group">
		<label for="foto_peserta_3">Pas Foto Formal Peserta 3:</label><br />
		<input id="foto_peserta_3" type="file" name="foto_peserta_3" value="{{ old('foto_peserta_3') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA 3 -->
	<div class="form-group">
		<label for="ktm_peserta_3">KTM / KRS Ketua Semester Peserta 3:</label><br />
		<input id="ktm_peserta_3" type="file" name="ktm_peserta_3" value="{{ old('ktm_peserta_3') }}" class="form-control-file" />
	</div>


	<!-- FORM NAMA LENGKAP PESERTA 4 -->
	<div class="form-group">
		<label for="nama_peserta_4">Nama Lengkap Peserta 4:</label><br />
		<input id="nama_peserta_4" type="text" name="nama_peserta_4" value="{{ old('nama_peserta_4') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA 4 -->
	<div class="form-group">
		<label for="no_wa_peserta_4">No Whatsapp Peserta 4:</label><br />
		<input id="no_wa_peserta_4" type="text" name="no_wa_peserta_4" value="{{ old('no_wa_peserta_4') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA 4 -->
	<div class="form-group">
		<label for="nim_peserta_4">NIM Peserta 4:</label><br />
		<input id="nim_peserta_4" type="text" name="nim_peserta_4" value="{{ old('nim_peserta_4') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA 4 -->
	<div class="form-group">
		<label for="foto_peserta_4">Pas Foto Formal Peserta 4:</label><br />
		<input id="foto_peserta_4" type="file" name="foto_peserta_4" value="{{ old('foto_peserta_4') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA 4 -->
	<div class="form-group">
		<label for="ktm_peserta_4">KTM / KRS Ketua Semester Peserta 4:</label><br />
		<input id="ktm_peserta_4" type="file" name="ktm_peserta_4" value="{{ old('ktm_peserta_4') }}" class="form-control-file" />
	</div>


	<!-- FORM NAMA LENGKAP PESERTA 5 -->
	<div class="form-group">
		<label for="nama_peserta_5">Nama Lengkap Peserta 5:</label><br />
		<input id="nama_peserta_5" type="text" name="nama_peserta_5" value="{{ old('nama_peserta_5') }}" class="form-control" />
	</div>

	<!-- FORM WHATSAPP PESERTA 5 -->
	<div class="form-group">
		<label for="no_wa_peserta_5">No Whatsapp Peserta 5:</label><br />
		<input id="no_wa_peserta_5" type="text" name="no_wa_peserta_5" value="{{ old('no_wa_peserta_5') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN PESERTA 5 -->
	<div class="form-group">
		<label for="nim_peserta_5">NIM Peserta 5:</label><br />
		<input id="nim_peserta_5" type="text" name="nim_peserta_5" value="{{ old('nim_peserta_5') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL PESERTA 5 -->
	<div class="form-group">
		<label for="foto_peserta_5">Pas Foto Formal Peserta 5:</label><br />
		<input id="foto_peserta_5" type="file" name="foto_peserta_5" value="{{ old('foto_peserta_5') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS PESERTA 5 -->
	<div class="form-group">
		<label for="ktm_peserta_5">KTM / KRS Ketua Semester Peserta 5:</label><br />
		<input id="ktm_peserta_5" type="file" name="ktm_peserta_5" value="{{ old('ktm_peserta_5') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection