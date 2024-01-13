@extends("layouts.app")

@section("content")
<h2>Pendaftaran Poster</h2>

<!-- DATA YANG SUDAH TERKONFIRMASI -->
<h3>Sudah Terkonfirmasi</h3>
@if (count($table_data_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Fakultas</th>
		<th>Nama Ketua</th>
		<th>Jurusan Ketua</th>
		<th>WA Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		<th>Nama Anggota</th>
		<th>Jurusan Anggota</th>
		<th>WA Anggota</th>
		<th>Ktm Anggota</th>
		<th>Foto Anggota</th>
	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.poster.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="0" />
				<input type="submit" value="batalkan" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>
		<td>{{ $row->nama_anggota }}</td>
		<td>{{ $row->nim_jurusan_anggota }}</td>
		<td>{{ $row->no_wa_anggota }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota) }}" />
		</td>
	</tr>
	@endforeach
</table>
@endif

<!-- DATA YANG BELUM TERKONFIRMASI -->
<h3>Belum Terkonfirmasi</h3>
@if (count($table_data_not_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Fakultas</th>
		<th>Nama Ketua</th>
		<th>Jurusan Ketua</th>
		<th>WA Ketua</th>
		<th>Ktm Ketua</th>
		<th>Foto Ketua</th>
		<th>Nama Anggota</th>
		<th>Jurusan Anggota</th>
		<th>WA Anggota</th>
		<th>Ktm Anggota</th>
		<th>Foto Anggota</th>
	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_not_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.poster.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="1" />
				<input type="submit" value="konfirmasi" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_jurusan_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>
		<td>{{ $row->nama_anggota }}</td>
		<td>{{ $row->nim_jurusan_anggota }}</td>
		<td>{{ $row->no_wa_anggota }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota) }}" />
		</td>
	</tr>
	@endforeach
</table>
@endif
@endsection