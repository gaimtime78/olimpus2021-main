@extends("layouts.pendaftaran")

@section("form-pendaftaran")
<form method="POST" action="{{ route('landing.keilmiahan.debat.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="nama_tim">Nama Tim (required):</label><br />
		<input id="nama_tim" type="text" name="nama_tim" value="{{ old('nama_tim') }}" class="form-control" />
	</div>
	<div class="form-group">
		<label for="fakultas">Fakultas (required):</label><br />
		<input id="fakultas" type="text" name="fakultas" value="{{ old('fakultas') }}" class="form-control" />
	</div>
	@for($i = 1; $i <= 3; $i++) <div class="form-group">
		<label for="nama_speaker_{{ $i }}">Nama Speaker {{ $i }} (required):</label><br />
		<input id="nama_speaker_{{ $i }}" type="text" name="nama_speaker_{{ $i }}" value="{{ old('nama_speaker_' . $i) }}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="angkatan_nim_speaker_{{ $i }}">Angkatan / NIM Speaker {{ $i }} (required):</label><br />
			<input id="angkatan_nim_speaker_{{ $i }}" type="text" name="angkatan_nim_speaker_{{ $i }}" value="{{ old('angkatan_nim_speaker_'. $i) }}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="no_wa_speaker_{{ $i }}">Nomor WA Speaker {{ $i }} (required):</label><br />
			<input id="no_wa_speaker_{{ $i }}" type="text" name="no_wa_speaker_{{ $i }}" value="{{ old('no_wa_speaker_' . $i) }}" class="form-control" />
		</div>
		<div class="form-group">
			<label for="foto_speaker_{{ $i }}">Pas Foto Formal Speaker {{ $i }} (Required):</label><br />
			<input id="foto_speaker_{{ $i }}" type="file" name="foto_speaker_{{ $i }}" value="{{ old('foto_speaker_' . $i) }}" class="form-control-file" />
		</div>
		<div class="form-group">
			<label for="ktm_speaker_{{ $i }}">KTM / KRS Speaker {{ $i }} Semester terakhir (Required):</label><br />
			<input id="ktm_speaker_{{ $i }}" type="file" name="ktm_speaker_{{ $i }}" value="{{ old('ktm_speaker_' . $i) }}" class="form-control-file" />
		</div>
		@endfor
		<input type="submit" name="submit" value="submit" class="btn btn-primary" />
</form>
@endsection