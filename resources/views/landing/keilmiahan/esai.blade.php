@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.keilmiahan.esai.store') }}" enctype="multipart/form-data">
	@csrf

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

	<!-- JURUSAN KETUA TIM -->
	<div class="form-group">
		<label for="jurusan_ketua">Jurusan Ketua TIM (required):</label><br />
		<input id="jurusan_ketua" type="text" name="jurusan_ketua" value="{{ old('jurusan_ketua') }}" class="form-control" />
	</div>

	<!-- ANGKATAN KETUA TIM -->
	<div class="form-group">
		<label for="angkatan_ketua">Angkatan Ketua TIM (required):</label><br />
		<!-- <input id="angkatan_ketua" type="text" name="angkatan_ketua" value="{{ old('angkatan_ketua') }}" class="form-control"/> -->
		<select id="angkatan_ketua" name="angkatan_ketua" class="form-control">
			<option {{ old('angkatan_ketua') == '2017' ? "selected" : "" }}>2017</option>
			<option {{ old('angkatan_ketua') == '2018' ? "selected" : "" }}>2018</option>
			<option {{ old('angkatan_ketua') == '2019' ? "selected" : "" }}>2019</option>
			<option {{ old('angkatan_ketua') == '2020' ? "selected" : "" }}>2020</option>
		</select>
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
		<label for="nama_anggota">Nama Anggota TIM:</label><br />
		<input id="nama_anggota" type="text" name="nama_anggota" value="{{ old('nama_anggota') }}" class="form-control" />
	</div>

	<!-- FORM NIM / JURUSAN ANGGOTA TIM -->
	<div class="form-group">
		<label for="jurusan_anggota">Jurusan Anggota TIM:</label><br />
		<input id="jurusan_anggota" type="text" name="jurusan_anggota" value="{{ old('jurusan_anggota') }}" class="form-control" />
	</div>

	<!-- ANGKATAN ANGGOTA TIM -->
	<div class="form-group">
		<label for="angkatan_anggota">Angkatan Anggota TIM:</label><br />
		<!-- <input id="angkatan_anggota" type="text" name="angkatan_anggota" value="{{ old('angkatan_anggota') }}" class="form-control"/> -->
		<select id="angkatan_anggota" name="angkatan_anggota" class="form-control">
			<option {{ old('angkatan_anggota') == '2017' ? "selected" : "" }}>2017</option>
			<option {{ old('angkatan_anggota') == '2018' ? "selected" : "" }}>2018</option>
			<option {{ old('angkatan_anggota') == '2019' ? "selected" : "" }}>2019</option>
			<option {{ old('angkatan_anggota') == '2020' ? "selected" : "" }}>2020</option>
		</select>
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA -->
	<div class="form-group">
		<label for="foto_anggota">Pas Foto Formal Anggota 1:</label><br />
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