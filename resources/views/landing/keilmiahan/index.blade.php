@extends("layouts.landing")

@section("content")
<x-container class="py-5"  style="min-height: 480px; background-image: url('{{ asset('img/bg.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;">
	<div class="h1 text-center font-weight-bold py-5 text-white">🔬 Keilmiahan</div>
	<div class="row justify-content-center">
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">LKTI</p>
					<a href="{{ route('landing.keilmiahan.lkti.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Debat</p>
					<a href="{{ route('landing.keilmiahan.debat.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Esai</p>
					<a href="{{ route('landing.keilmiahan.esai.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Poster</p>
					<a href="{{ route('landing.keilmiahan.poster.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-12 my-3">
			<div class="card shadow h-100">
				<div class="card-body">
					<p class="text-center font-weight-bold h3 text-primary">Speech</p>
					<a href="{{ route('landing.keilmiahan.speech.index') }}" class="btn btn-primary mt-3 w-100">Daftarkan Dirimu!</a>
				</div>
			</div>
		</div>
	</div>
</x-container>
@endsection
