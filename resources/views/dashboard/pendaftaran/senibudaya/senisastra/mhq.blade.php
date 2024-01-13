@extends("layouts.app")

@section("content")
	<h2>Pendaftaran Musabaqah Hifdzil Quran</h2>

	<!-- DATA YANG SUDAH TERKONFIRMASI -->
	<h3>Sudah Terkonfirmasi</h3>
	@if (count($table_data_confirmed))
	<table>
		<!-- TABLE HEADING -->
		<tr>
			<th>id</th>
			<th>Action</th>
			<th>Fakultas</th>
			<th>Email</th>
			<th>Nama Peserta</th>
			<th>NIM Peserta</th>
			<th>WA Peserta</th>
			<th>Ktm Peserta</th>
			<th>Foto Peserta</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.senisastra.mhq.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
			</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->nama_peserta }}</td>
			<td>{{ $row->nim_peserta }}</td>
			<td>{{ $row->no_wa_peserta }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta) }}"/></td>
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
			<th>Email</th>
			<th>Nama Peserta</th>
			<th>NIM Peserta</th>
			<th>WA Peserta</th>
			<th>Ktm Peserta</th>
			<th>Foto Peserta</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.senisastra.mhq.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->nama_peserta }}</td>
			<td>{{ $row->nim_peserta }}</td>
			<td>{{ $row->no_wa_peserta }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta) }}"/></td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection