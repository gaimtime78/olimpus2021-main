@extends("layouts.app")

@section("content")
	<h2>Pendaftaran Music Group</h2>

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
			<th>Judul Lagu</th>

			<th>Nama Peserta 1</th>
			<th>NIM Peserta 1</th>
			<th>WA Peserta 1</th>
			<th>Ktm Peserta 1</th>
			<th>Foto Peserta 1</th>
			
			<th>Nama Peserta 2</th>
			<th>NIM Peserta 2</th>
			<th>WA Peserta 2</th>
			<th>Ktm Peserta 2</th>
			<th>Foto Peserta 2</th>
			
			<th>Nama Peserta 3</th>
			<th>NIM Peserta 3</th>
			<th>WA Peserta 3</th>
			<th>Ktm Peserta 3</th>
			<th>Foto Peserta 3</th>
			
			<th>Nama Peserta 4</th>
			<th>NIM Peserta 4</th>
			<th>WA Peserta 4</th>
			<th>Ktm Peserta 4</th>
			<th>Foto Peserta 4</th>
			
			<th>Nama Peserta 5</th>
			<th>NIM Peserta 5</th>
			<th>WA Peserta 5</th>
			<th>Ktm Peserta 5</th>
			<th>Foto Peserta 5</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.senimusik.musicgroup.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="0" />
					<input type="submit" value="batalkan" />
				</form>
			</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->judul_lagu }}</td>

			<td>{{ $row->nama_peserta_1 }}</td>
			<td>{{ $row->nim_peserta_1 }}</td>
			<td>{{ $row->no_wa_peserta_1 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_1) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_1) }}"/></td>
			
			<td>{{ $row->nama_peserta_2 }}</td>
			<td>{{ $row->nim_peserta_2 }}</td>
			<td>{{ $row->no_wa_peserta_2 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_2) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_2) }}"/></td>
			
			<td>{{ $row->nama_peserta_3 }}</td>
			<td>{{ $row->nim_peserta_3 }}</td>
			<td>{{ $row->no_wa_peserta_3 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_3) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_3) }}"/></td>
			
			<td>{{ $row->nama_peserta_4 }}</td>
			<td>{{ $row->nim_peserta_4 }}</td>
			<td>{{ $row->no_wa_peserta_4 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_4) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_4) }}"/></td>
			
			<td>{{ $row->nama_peserta_5 }}</td>
			<td>{{ $row->nim_peserta_5 }}</td>
			<td>{{ $row->no_wa_peserta_5 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_5) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_5) }}"/></td>
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
			<th>Judul Lagu</th>

			<th>Nama Peserta 1</th>
			<th>NIM Peserta 1</th>
			<th>WA Peserta 1</th>
			<th>Ktm Peserta 1</th>
			<th>Foto Peserta 1</th>
			
			<th>Nama Peserta 2</th>
			<th>NIM Peserta 2</th>
			<th>WA Peserta 2</th>
			<th>Ktm Peserta 2</th>
			<th>Foto Peserta 2</th>
			
			<th>Nama Peserta 3</th>
			<th>NIM Peserta 3</th>
			<th>WA Peserta 3</th>
			<th>Ktm Peserta 3</th>
			<th>Foto Peserta 3</th>
			
			<th>Nama Peserta 4</th>
			<th>NIM Peserta 4</th>
			<th>WA Peserta 4</th>
			<th>Ktm Peserta 4</th>
			<th>Foto Peserta 4</th>
			
			<th>Nama Peserta 5</th>
			<th>NIM Peserta 5</th>
			<th>WA Peserta 5</th>
			<th>Ktm Peserta 5</th>
			<th>Foto Peserta 5</th>
		</tr>

		<!-- TABLE BODY -->
		@foreach($table_data_not_confirmed as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>
				<form action="{{ route('pendaftaran.senimusik.musicgroup.update') }}" method="POST">
					@csrf
					@method('put')
					<input type="hidden" name="row_id" value="{{ $row->id }}" />
					<input type="hidden" name="set_value" value="1" />
					<input type="submit" value="konfirmasi" />
				</form>
			</td>
			<td>{{ $row->fakultas }}</td>
			<td>{{ $row->email }}</td>
			<td>{{ $row->judul_lagu }}</td>

			<td>{{ $row->nama_peserta_1 }}</td>
			<td>{{ $row->nim_peserta_1 }}</td>
			<td>{{ $row->no_wa_peserta_1 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_1) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_1) }}"/></td>
			
			<td>{{ $row->nama_peserta_2 }}</td>
			<td>{{ $row->nim_peserta_2 }}</td>
			<td>{{ $row->no_wa_peserta_2 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_2) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_2) }}"/></td>
			
			<td>{{ $row->nama_peserta_3 }}</td>
			<td>{{ $row->nim_peserta_3 }}</td>
			<td>{{ $row->no_wa_peserta_3 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_3) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_3) }}"/></td>
			
			<td>{{ $row->nama_peserta_4 }}</td>
			<td>{{ $row->nim_peserta_4 }}</td>
			<td>{{ $row->no_wa_peserta_4 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_4) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_4) }}"/></td>
			
			<td>{{ $row->nama_peserta_5 }}</td>
			<td>{{ $row->nim_peserta_5 }}</td>
			<td>{{ $row->no_wa_peserta_5 }}</td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->ktm_peserta_5) }}"/></td>
			<td><x-image-link src="{{ asset('pendaftaran/' . $row->foto_peserta_5) }}"/></td>
		</tr>
		@endforeach
	</table>
	@endif
@endsection