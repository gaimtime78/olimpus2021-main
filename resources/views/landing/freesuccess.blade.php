@extends("layouts.landing")

@section("content")
<x-container class="py-5" style="min-height: 480px; background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" >
	<div class="h1 text-center font-weight-bold py-5 text-white">Daftar {{ $cabang_lomba }}</div>
	<div class="row">
		<div class="col-12 col-lg my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-success font-weight-bold">{{ session('status') }}</p>
					<p>Silakan konfirmasi pendaftaran dengan klik tombol ini</p>
					<p><a href="{{ $whatsapp }}" class="btn btn-success w-100">Konfirmasi Pendaftaran {{ $cabang_lomba }} (Whatsapp)</a></p>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
