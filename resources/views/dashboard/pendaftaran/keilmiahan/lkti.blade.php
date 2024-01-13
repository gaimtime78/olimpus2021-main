@extends("layouts.app")

@section("content")
	<h2>Pendaftaran LKTI</h2>

	<!-- DATA YANG SUDAH TERKONFIRMASI -->
	<h3>Sudah Terkonfirmasi</h3>
	@if (count($table_data_confirmed))
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>id</th>
			<th>Action</th>
			<th>Email</th>
			<th>Fakultas</th>
			<th>Whatsapp</th>
			<th>Nama Ketua</th>
			<th>NIM Ketua</th>
			<th>Foto Ketua</th>
			<th>Ktm Ketua</th>
			<th>Nama Anggota 1</th>
			<th>NIM Anggota 1</th>
			<th>Foto Anggota 1</th>
			<th>Ktm Anggota 1</th>
			<th>Nama Anggota 2</th>
			<th>NIM Anggota 2</th>
			<th>Foto Anggota 2</th>
			<th>Ktm Anggota 2</th>			
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.lkti.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
			</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->nim_jurusan_ketua }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}"/></td>
			<td>{{ $row->nama_anggota_1 }}</td>
			<td>{{ $row->nim_jurusan_anggota_1 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}"/></td>
			<td>{{ $row->nama_anggota_2 }}</td>
			<td>{{ $row->nim_jurusan_anggota_2 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}"/></td>
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
			<th>Email</th>
			<th>Fakultas</th>
			<th>Whatsapp</th>
			<th>Nama Ketua</th>
			<th>NIM Ketua</th>
			<th>Foto Ketua</th>
			<th>Ktm Ketua</th>
			<th>Nama Anggota 1</th>
			<th>NIM Anggota 1</th>
			<th>Foto Anggota 1</th>
			<th>Ktm Anggota 1</th>
			<th>Nama Anggota 2</th>
			<th>NIM Anggota 2</th>
			<th>Foto Anggota 2</th>
			<th>Ktm Anggota 2</th>	
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.lkti.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->no_wa_ketua }}</td>
			<td>{{ $row->nama_ketua }}</td>
			<td>{{ $row->nim_jurusan_ketua }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_ketua) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_ketua) }}"/></td>
			<td>{{ $row->nama_anggota_1 }}</td>
			<td>{{ $row->nim_jurusan_anggota_1 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_1) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_1) }}"/></td>
			<td>{{ $row->nama_anggota_2 }}</td>
			<td>{{ $row->nim_jurusan_anggota_2 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_anggota_2) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_anggota_2) }}"/></td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection