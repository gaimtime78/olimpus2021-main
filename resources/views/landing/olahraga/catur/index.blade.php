@extends("layouts.landing")

@section("content")
<x-container class="py-5"  style="min-height: 480px; background-image: url('{{ asset('img/bg.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;">
	<div class="h1 text-center font-weight-bold py-5 text-white">♟️ Catur</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Perorangan</p>
					<a href="{{ route('landing.olahraga.catur.perorangan.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Beregu</p>
					<a href="{{ route('landing.olahraga.catur.beregu.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
