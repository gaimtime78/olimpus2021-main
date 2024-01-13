@extends("layouts.app")

@section("content")
<h2>Pendaftaran Tari Modern</h2>

<!-- DATA YANG SUDAH TERKONFIRMASI -->
<h3>Sudah Terkonfirmasi</h3>
@if (count($table_data_confirmed))
<table>
	<!-- TABLE HEADING -->
	<tr>
		<th>id</th>
		<th>Action</th>
		<th>Fakultas</th>
		<th>Judul Karya</th>

		<th>Nama Ketua</th>
		<th>NIM Ketua</th>
		<th>TTL Ketua</th>
		<th>Alamat Ketua</th>
		<th>No Wa Ketua</th>
		<th>Email Ketua</th>
		<th>Jurusan / Angkatan Ketua</th>
		<th>KTM Ketua</th>
		<th>Foto Ketua</th>
		
		<th>Nama Anggota 1</th>
		<th>NIM Anggota 1</th>
		<th>TTL Anggota 1</th>
		<th>Alamat Anggota 1</th>
		<th>No Wa Anggota 1</th>
		<th>Email Anggota 1</th>
		<th>Jurusan / Angkatan Anggota 1</th>
		<th>KTM Anggota 1</th>
		<th>Foto Anggota 1</th>

		<th>Nama Anggota 2</th>
		<th>NIM Anggota 2</th>
		<th>TTL Anggota 2</th>
		<th>Alamat Anggota 2</th>
		<th>No Wa Anggota 2</th>
		<th>Email Anggota 2</th>
		<th>Jurusan / Angkatan Anggota 2</th>
		<th>KTM Anggota 2</th>
		<th>Foto Anggota 2</th>

		<th>Nama Anggota 3</th>
		<th>NIM Anggota 3</th>
		<th>TTL Anggota 3</th>
		<th>Alamat Anggota 3</th>
		<th>No Wa Anggota 3</th>
		<th>Email Anggota 3</th>
		<th>Jurusan / Angkatan Anggota 3</th>
		<th>KTM Anggota 3</th>
		<th>Foto Anggota 3</th>

		<th>Nama Anggota 4</th>
		<th>NIM Anggota 4</th>
		<th>TTL Anggota 4</th>
		<th>Alamat Anggota 4</th>
		<th>No Wa Anggota 4</th>
		<th>Email Anggota 4</th>
		<th>Jurusan / Angkatan Anggota 4</th>
		<th>KTM Anggota 4</th>
		<th>Foto Anggota 4</th>
	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.senitari.tarimodern.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="0" />
				<input type="submit" value="batalkan" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->judul_karya }}</td>

		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_ketua }}</td>
		<td>{{ $row->ttl_ketua }}</td>
		<td>{{ $row->alamat_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->email_ketua }}</td>
		<td>{{ $row->jurusan_angkatan_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>

		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_anggota_1 }}</td>
		<td>{{ $row->ttl_anggota_1 }}</td>
		<td>{{ $row->alamat_anggota_1 }}</td>
		<td>{{ $row->no_wa_anggota_1 }}</td>
		<td>{{ $row->email_anggota_1 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>

		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_anggota_2 }}</td>
		<td>{{ $row->ttl_anggota_2 }}</td>
		<td>{{ $row->alamat_anggota_2 }}</td>
		<td>{{ $row->no_wa_anggota_2 }}</td>
		<td>{{ $row->email_anggota_2 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>

		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_anggota_3 }}</td>
		<td>{{ $row->ttl_anggota_3 }}</td>
		<td>{{ $row->alamat_anggota_3 }}</td>
		<td>{{ $row->no_wa_anggota_3 }}</td>
		<td>{{ $row->email_anggota_3 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
		</td>

		<td>{{ $row->nama_anggota_4 }}</td>
		<td>{{ $row->nim_anggota_4 }}</td>
		<td>{{ $row->ttl_anggota_4 }}</td>
		<td>{{ $row->alamat_anggota_4 }}</td>
		<td>{{ $row->no_wa_anggota_4 }}</td>
		<td>{{ $row->email_anggota_4 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_4 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_4) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_4) }}" />
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
		<th>Judul Karya</th>

		<th>Nama Ketua</th>
		<th>NIM Ketua</th>
		<th>TTL Ketua</th>
		<th>Alamat Ketua</th>
		<th>No Wa Ketua</th>
		<th>Email Ketua</th>
		<th>Jurusan / Angkatan Ketua</th>
		<th>KTM Ketua</th>
		<th>Foto Ketua</th>

		<th>Nama Anggota 1</th>
		<th>NIM Anggota 1</th>
		<th>TTL Anggota 1</th>
		<th>Alamat Anggota 1</th>
		<th>No Wa Anggota 1</th>
		<th>Email Anggota 1</th>
		<th>Jurusan / Angkatan Anggota 1</th>
		<th>KTM Anggota 1</th>
		<th>Foto Anggota 1</th>

		<th>Nama Anggota 2</th>
		<th>NIM Anggota 2</th>
		<th>TTL Anggota 2</th>
		<th>Alamat Anggota 2</th>
		<th>No Wa Anggota 2</th>
		<th>Email Anggota 2</th>
		<th>Jurusan / Angkatan Anggota 2</th>
		<th>KTM Anggota 2</th>
		<th>Foto Anggota 2</th>

		<th>Nama Anggota 3</th>
		<th>NIM Anggota 3</th>
		<th>TTL Anggota 3</th>
		<th>Alamat Anggota 3</th>
		<th>No Wa Anggota 3</th>
		<th>Email Anggota 3</th>
		<th>Jurusan / Angkatan Anggota 3</th>
		<th>KTM Anggota 3</th>
		<th>Foto Anggota 3</th>

		<th>Nama Anggota 4</th>
		<th>NIM Anggota 4</th>
		<th>TTL Anggota 4</th>
		<th>Alamat Anggota 4</th>
		<th>No Wa Anggota 4</th>
		<th>Email Anggota 4</th>
		<th>Jurusan / Angkatan Anggota 4</th>
		<th>KTM Anggota 4</th>
		<th>Foto Anggota 4</th>
	</tr>

	<!-- TABLE BODY -->
	@foreach($table_data_not_confirmed as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>
			<form action="{{ route('pendaftaran.senitari.tarimodern.update') }}" method="POST">
				@csrf
				@method('put')
				<input type="hidden" name="row_id" value="{{ $row->id }}" />
				<input type="hidden" name="set_value" value="1" />
				<input type="submit" value="konfirmasi" />
			</form>
		</td>
		<td>{{ $row->fakultas }}</td>
		<td>{{ $row->judul_karya }}</td>

		<td>{{ $row->nama_ketua }}</td>
		<td>{{ $row->nim_ketua }}</td>
		<td>{{ $row->ttl_ketua }}</td>
		<td>{{ $row->alamat_ketua }}</td>
		<td>{{ $row->no_wa_ketua }}</td>
		<td>{{ $row->email_ketua }}</td>
		<td>{{ $row->jurusan_angkatan_ketua }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}" />
		</td>

		<td>{{ $row->nama_anggota_1 }}</td>
		<td>{{ $row->nim_anggota_1 }}</td>
		<td>{{ $row->ttl_anggota_1 }}</td>
		<td>{{ $row->alamat_anggota_1 }}</td>
		<td>{{ $row->no_wa_anggota_1 }}</td>
		<td>{{ $row->email_anggota_1 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_1 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}" />
		</td>

		<td>{{ $row->nama_anggota_2 }}</td>
		<td>{{ $row->nim_anggota_2 }}</td>
		<td>{{ $row->ttl_anggota_2 }}</td>
		<td>{{ $row->alamat_anggota_2 }}</td>
		<td>{{ $row->no_wa_anggota_2 }}</td>
		<td>{{ $row->email_anggota_2 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_2 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}" />
		</td>

		<td>{{ $row->nama_anggota_3 }}</td>
		<td>{{ $row->nim_anggota_3 }}</td>
		<td>{{ $row->ttl_anggota_3 }}</td>
		<td>{{ $row->alamat_anggota_3 }}</td>
		<td>{{ $row->no_wa_anggota_3 }}</td>
		<td>{{ $row->email_anggota_3 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_3 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_3) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_3) }}" />
		</td>

		<td>{{ $row->nama_anggota_4 }}</td>
		<td>{{ $row->nim_anggota_4 }}</td>
		<td>{{ $row->ttl_anggota_4 }}</td>
		<td>{{ $row->alamat_anggota_4 }}</td>
		<td>{{ $row->no_wa_anggota_4 }}</td>
		<td>{{ $row->email_anggota_4 }}</td>
		<td>{{ $row->jurusan_angkatan_anggota_4 }}</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_4) }}" />
		</td>
		<td>
			<x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_4) }}" />
		</td>
	</tr>
	@endforeach
</table>
@endif
@endsection