@extends("layouts.landing")

@section('landing-js')
<script>
	var btn = document.getElementById('btnkonfirmasi');
	var warning = document.getElementById('warningcontent');
	var main = document.getElementById('maincontent');

	btn.onclick = function() {
		main.style.display = 'inline-block';
		warning.style.display = 'none';
	}
</script>
@endsection

@section("content")
<x-container class="py-5">
	<div class="h1 text-center font-weight-bold py-5">{{ $cabang_lomba }}</div>
	<div class="row">
		<div class="col-12 my-3">
			<img src="{{ asset($pamflet) }}" class="img-fluid w-100 shadow rounded" />
		</div>
		<div class="col col-lg my-3">
			<a href="{{ asset($pamflet) }}" class="btn btn-primary w-100" download>Download Pamflet</a>
		</div>
		<div class="col col-lg my-3">
			<a href="{{ $guidebook }}" class="btn btn-danger w-100">Download Guide Book</a>
		</div>
		<div class="col-12 col-lg my-3">
			<a href="{{ $whatsapp }}" class="btn btn-success w-100">Hubungi Contact Person {{ $cabang_lomba }} (Whatsapp)</a>
		</div>
	</div>
</x-container>
<x-container class="py-5" style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;">
	<div class="h1 text-center font-weight-bold py-5 text-white">Daftar {{ $cabang_lomba }}</div>
	<div class="row">
		@if ($errors->any())
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					@foreach($errors->all() as $error)
					<p class="text-danger font-weight-bold">{{ $error }}</p>
					@endforeach
				</div>
			</div>
		</div>
		@endif
		<div class="w-100"></div>
		@if ($konfirmasi_bem && !$errors->any())
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body text-center" id="warningcontent">
					<div class="h1 text-danger font-weight-bold">⚠️ PERHATIAN ⚠️</div>
					<p>Kategori lomba yang akan anda daftarkan memiliki kuota maksimal tiap fakultas. Anda harus konfirmasi terlebih dahulu kepada BEM fakultas Anda. Silakan tekan tombol di bawah ini apabila Anda sudah mengkonfirmasi kepada BEM fakultas Anda.</p>
					<p>
						<button class="btn btn-warning" id="btnkonfirmasi">Saya Sudah Konfirmasi BEM Fakultas Saya</button>
					</p>
					<p>Jika Anda belum melakukan konfirmasi, atau masih memiliki pertanyaan terkait aturan ini, Anda bisa menghubungi bagian humas kami dengan menekan tombol di bawah ini</p>
					<p>
						<a href="https://api.whatsapp.com/send?phone=6289669942627" class="btn btn-success">Hubungi CP lewat Whatsapp (Annisa)</a>
					</p>
				</div>
				<div class="card-body" id="maincontent" style="display: none;">
					<div class="h3 font-weight-bold text-right">Silakan Mengisi Form Berikut</div>
					@yield('form-pendaftaran')
				</div>
			</div>
		</div>
		@else
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<div class="h3 font-weight-bold text-right">Silakan Mengisi Form Berikut</div>
					@yield('form-pendaftaran')
				</div>
			</div>
		</div>
		@endif
	</div>
</x-container>
@endsection
