@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.senibudaya.senitari.taritradisional.store') }}" enctype="multipart/form-data">
	@csrf
	<!-- FORM FAKULTAS -->
	<div class="form-group">
		<label for="fakultas">Fakultas (required):</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>
	
	<!-- FORM JUDUL KARYA -->
	<div class="form-group">
		<label for="judul_karya">Judul Karya (required):</label><br />
		<input id="judul_karya" type="text" name="judul_karya" value="{{ old('judul_karya') }}" class="form-control" />
	</div>
	
	<!-- FORM NAMA KETUA-->
	<div class="form-group">
		<label for="nama_ketua">Nama Ketua (required):</label><br />
		<input id="nama_ketua" type="text" name="nama_ketua" value="{{ old('nama_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM NIM KETUA -->
	<div class="form-group">
		<label for="nim_ketua">Nim Ketua (required):</label><br />
		<input id="nim_ketua" type="text" name="nim_ketua" value="{{ old('nim_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM TEMPAT, TANGGAL LAHIR KETUA -->
	<div class="form-group">
		<label for="ttl_ketua">Tempat, Tanggal Lahir Ketua (required):</label><br />
		<input id="ttl_ketua" type="text" name="ttl_ketua" value="{{ old('ttl_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM ALAMAT KETUA -->
	<div class="form-group">
		<label for="alamat_ketua">Alamat Ketua (required):</label><br />
		<input id="alamat_ketua" type="text" name="alamat_ketua" value="{{ old('alamat_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM EMAIL KETUA -->
	<div class="form-group">
		<label for="email_ketua">Email Ketua (required):</label><br />
		<input id="email_ketua" type="text" name="email_ketua" value="{{ old('email_ketua') }}" class="form-control" />
	</div>

	<!-- FORM NO WHATSAPP KETUA -->
	<div class="form-group">
		<label for="no_wa_ketua">No Whatsapp Ketua (required):</label><br />
		<input id="no_wa_ketua" type="text" name="no_wa_ketua" value="{{ old('no_wa_ketua') }}" class="form-control" />
	</div>
	
	<!-- FORM JURUSAN / ANGKATAN KETUA -->
	<div class="form-group">
		<label for="jurusan_angkatan_ketua">Jurusan / Angkatan Ketua (required):</label><br />
		<input id="jurusan_angkatan_ketua" type="text" name="jurusan_angkatan_ketua" value="{{ old('jurusan_angkatan_ketua') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL KETUA -->
	<div class="form-group">
		<label for="foto_ketua">Pas Foto Formal Ketua (Required):</label><br />
		<input id="foto_ketua" type="file" name="foto_ketua" value="{{ old('foto_ketua') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS KETUA -->
	<div class="form-group">
		<label for="ktm_ketua">KTM / KRS Ketua (Required):</label><br />
		<input id="ktm_ketua" type="file" name="ktm_ketua" value="{{ old('ktm_ketua') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA 1-->
<div class="form-group">
		<label for="nama_anggota_1">Nama Anggota 1 :</label><br />
		<input id="nama_anggota_1" type="text" name="nama_anggota_1" value="{{ old('nama_anggota_1') }}" class="form-control" />
	</div>
	
	<!-- FORM NIM ANGGOTA 1 -->
	<div class="form-group">
		<label for="nim_anggota_1">Nim Anggota 1 :</label><br />
		<input id="nim_anggota_1" type="text" name="nim_anggota_1" value="{{ old('nim_anggota_1') }}" class="form-control" />
	</div>
	
	<!-- FORM TEMPAT, TANGGAL LAHIR ANGGOTA 1 -->
	<div class="form-group">
		<label for="ttl_anggota_1">Tempat, Tanggal Lahir Anggota 1 :</label><br />
		<input id="ttl_anggota_1" type="text" name="ttl_anggota_1" value="{{ old('ttl_anggota_1') }}" class="form-control" />
	</div>
	
	<!-- FORM ALAMAT ANGGOTA 1 -->
	<div class="form-group">
		<label for="alamat_anggota_1">Alamat Anggota 1 :</label><br />
		<input id="alamat_anggota_1" type="text" name="alamat_anggota_1" value="{{ old('alamat_anggota_1') }}" class="form-control" />
	</div>
	
	<!-- FORM EMAIL ANGGOTA 1 -->
	<div class="form-group">
		<label for="email_anggota_1">Email Anggota 1 :</label><br />
		<input id="email_anggota_1" type="text" name="email_anggota_1" value="{{ old('email_anggota_1') }}" class="form-control" />
	</div>

	<!-- FORM NO WHATSAPP ANGGOTA 1 -->
	<div class="form-group">
		<label for="no_wa_anggota_1">No Whatsapp Anggota 1 :</label><br />
		<input id="no_wa_anggota_1" type="text" name="no_wa_anggota_1" value="{{ old('no_wa_anggota_1') }}" class="form-control" />
	</div>
	
	<!-- FORM JURUSAN / ANGKATAN ANGGOTA 1 -->
	<div class="form-group">
		<label for="jurusan_angkatan_anggota_1">Jurusan / Angkatan Anggota 1 :</label><br />
		<input id="jurusan_angkatan_anggota_1" type="text" name="jurusan_angkatan_anggota_1" value="{{ old('jurusan_angkatan_anggota_1') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 1 -->
	<div class="form-group">
		<label for="foto_anggota_1">Pas Foto Formal Anggota 1:</label><br />
		<input id="foto_anggota_1" type="file" name="foto_anggota_1" value="{{ old('foto_anggota_1') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS ANGGOTA 1 -->
	<div class="form-group">
		<label for="ktm_anggota_1">KTM / KRS Anggota 1:</label><br />
		<input id="ktm_anggota_1" type="file" name="ktm_anggota_1" value="{{ old('ktm_anggota_1') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA 2-->
<div class="form-group">
		<label for="nama_anggota_2">Nama Anggota 2 :</label><br />
		<input id="nama_anggota_2" type="text" name="nama_anggota_2" value="{{ old('nama_anggota_2') }}" class="form-control" />
	</div>
	
	<!-- FORM NIM ANGGOTA 2 -->
	<div class="form-group">
		<label for="nim_anggota_2">Nim Anggota 2 :</label><br />
		<input id="nim_anggota_2" type="text" name="nim_anggota_2" value="{{ old('nim_anggota_2') }}" class="form-control" />
	</div>
	
	<!-- FORM TEMPAT, TANGGAL LAHIR ANGGOTA 2 -->
	<div class="form-group">
		<label for="ttl_anggota_2">Tempat, Tanggal Lahir Anggota 2 :</label><br />
		<input id="ttl_anggota_2" type="text" name="ttl_anggota_2" value="{{ old('ttl_anggota_2') }}" class="form-control" />
	</div>
	
	<!-- FORM ALAMAT ANGGOTA 2 -->
	<div class="form-group">
		<label for="alamat_anggota_2">Alamat Anggota 2 :</label><br />
		<input id="alamat_anggota_2" type="text" name="alamat_anggota_2" value="{{ old('alamat_anggota_2') }}" class="form-control" />
	</div>
	
	<!-- FORM EMAIL ANGGOTA 2 -->
	<div class="form-group">
		<label for="email_anggota_2">Email Anggota 2 :</label><br />
		<input id="email_anggota_2" type="text" name="email_anggota_2" value="{{ old('email_anggota_2') }}" class="form-control" />
	</div>

	<!-- FORM NO WHATSAPP ANGGOTA 2 -->
	<div class="form-group">
		<label for="no_wa_anggota_2">No Whatsapp Anggota 2 :</label><br />
		<input id="no_wa_anggota_2" type="text" name="no_wa_anggota_2" value="{{ old('no_wa_anggota_2') }}" class="form-control" />
	</div>
	
	<!-- FORM JURUSAN / ANGKATAN ANGGOTA 2 -->
	<div class="form-group">
		<label for="jurusan_angkatan_anggota_2">Jurusan / Angkatan Anggota 2 :</label><br />
		<input id="jurusan_angkatan_anggota_2" type="text" name="jurusan_angkatan_anggota_2" value="{{ old('jurusan_angkatan_anggota_2') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 2 -->
	<div class="form-group">
		<label for="foto_anggota_2">Pas Foto Formal Anggota 2:</label><br />
		<input id="foto_anggota_2" type="file" name="foto_anggota_2" value="{{ old('foto_anggota_2') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS ANGGOTA 2 -->
	<div class="form-group">
		<label for="ktm_anggota_2">KTM / KRS Anggota 2:</label><br />
		<input id="ktm_anggota_2" type="file" name="ktm_anggota_2" value="{{ old('ktm_anggota_2') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA 3-->
<div class="form-group">
		<label for="nama_anggota_3">Nama Anggota 3 :</label><br />
		<input id="nama_anggota_3" type="text" name="nama_anggota_3" value="{{ old('nama_anggota_3') }}" class="form-control" />
	</div>
	
	<!-- FORM NIM ANGGOTA 3 -->
	<div class="form-group">
		<label for="nim_anggota_3">Nim Anggota 3 :</label><br />
		<input id="nim_anggota_3" type="text" name="nim_anggota_3" value="{{ old('nim_anggota_3') }}" class="form-control" />
	</div>
	
	<!-- FORM TEMPAT, TANGGAL LAHIR ANGGOTA 3 -->
	<div class="form-group">
		<label for="ttl_anggota_3">Tempat, Tanggal Lahir Anggota 3 :</label><br />
		<input id="ttl_anggota_3" type="text" name="ttl_anggota_3" value="{{ old('ttl_anggota_3') }}" class="form-control" />
	</div>
	
	<!-- FORM ALAMAT ANGGOTA 3 -->
	<div class="form-group">
		<label for="alamat_anggota_3">Alamat Anggota 3 :</label><br />
		<input id="alamat_anggota_3" type="text" name="alamat_anggota_3" value="{{ old('alamat_anggota_3') }}" class="form-control" />
	</div>
	
	<!-- FORM EMAIL ANGGOTA 3 -->
	<div class="form-group">
		<label for="email_anggota_3">Email Anggota 3 :</label><br />
		<input id="email_anggota_3" type="text" name="email_anggota_3" value="{{ old('email_anggota_3') }}" class="form-control" />
	</div>

	<!-- FORM NO WHATSAPP ANGGOTA 3 -->
	<div class="form-group">
		<label for="no_wa_anggota_3">No Whatsapp Anggota 3 :</label><br />
		<input id="no_wa_anggota_3" type="text" name="no_wa_anggota_3" value="{{ old('no_wa_anggota_3') }}" class="form-control" />
	</div>
	
	<!-- FORM JURUSAN / ANGKATAN ANGGOTA 3 -->
	<div class="form-group">
		<label for="jurusan_angkatan_anggota_3">Jurusan / Angkatan Anggota 3 :</label><br />
		<input id="jurusan_angkatan_anggota_3" type="text" name="jurusan_angkatan_anggota_3" value="{{ old('jurusan_angkatan_anggota_3') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 3 -->
	<div class="form-group">
		<label for="foto_anggota_3">Pas Foto Formal Anggota 3:</label><br />
		<input id="foto_anggota_3" type="file" name="foto_anggota_3" value="{{ old('foto_anggota_3') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS ANGGOTA 3 -->
	<div class="form-group">
		<label for="ktm_anggota_3">KTM / KRS Anggota 3:</label><br />
		<input id="ktm_anggota_3" type="file" name="ktm_anggota_3" value="{{ old('ktm_anggota_3') }}" class="form-control-file" />
	</div>

	<!-- FORM NAMA ANGGOTA 4-->
<div class="form-group">
		<label for="nama_anggota_4">Nama Anggota 4 :</label><br />
		<input id="nama_anggota_4" type="text" name="nama_anggota_4" value="{{ old('nama_anggota_4') }}" class="form-control" />
	</div>
	
	<!-- FORM NIM ANGGOTA 4 -->
	<div class="form-group">
		<label for="nim_anggota_4">Nim Anggota 4 :</label><br />
		<input id="nim_anggota_4" type="text" name="nim_anggota_4" value="{{ old('nim_anggota_4') }}" class="form-control" />
	</div>
	
	<!-- FORM TEMPAT, TANGGAL LAHIR ANGGOTA 4 -->
	<div class="form-group">
		<label for="ttl_anggota_4">Tempat, Tanggal Lahir Anggota 4 :</label><br />
		<input id="ttl_anggota_4" type="text" name="ttl_anggota_4" value="{{ old('ttl_anggota_4') }}" class="form-control" />
	</div>
	
	<!-- FORM ALAMAT ANGGOTA 4 -->
	<div class="form-group">
		<label for="alamat_anggota_4">Alamat Anggota 4 :</label><br />
		<input id="alamat_anggota_4" type="text" name="alamat_anggota_4" value="{{ old('alamat_anggota_4') }}" class="form-control" />
	</div>
	
	<!-- FORM EMAIL ANGGOTA 4 -->
	<div class="form-group">
		<label for="email_anggota_4">Email Anggota 4 :</label><br />
		<input id="email_anggota_4" type="text" name="email_anggota_4" value="{{ old('email_anggota_4') }}" class="form-control" />
	</div>

	<!-- FORM NO WHATSAPP ANGGOTA 4 -->
	<div class="form-group">
		<label for="no_wa_anggota_4">No Whatsapp Anggota 4 :</label><br />
		<input id="no_wa_anggota_4" type="text" name="no_wa_anggota_4" value="{{ old('no_wa_anggota_4') }}" class="form-control" />
	</div>
	
	<!-- FORM JURUSAN / ANGKATAN ANGGOTA 4 -->
	<div class="form-group">
		<label for="jurusan_angkatan_anggota_4">Jurusan / Angkatan Anggota 4 :</label><br />
		<input id="jurusan_angkatan_anggota_4" type="text" name="jurusan_angkatan_anggota_4" value="{{ old('jurusan_angkatan_anggota_4') }}" class="form-control" />
	</div>

	<!-- FORM PAS FOTO FORMAL ANGGOTA 4 -->
	<div class="form-group">
		<label for="foto_anggota_4">Pas Foto Formal Anggota 4:</label><br />
		<input id="foto_anggota_4" type="file" name="foto_anggota_4" value="{{ old('foto_anggota_4') }}" class="form-control-file" />
	</div>

	<!-- FORM KTM / KRS ANGGOTA 4 -->
	<div class="form-group">
		<label for="ktm_anggota_4">KTM / KRS Anggota 4:</label><br />
		<input id="ktm_anggota_4" type="file" name="ktm_anggota_4" value="{{ old('ktm_anggota_4') }}" class="form-control-file" />
	</div>

	<!-- TOMBOL SUBMIT -->
	<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection