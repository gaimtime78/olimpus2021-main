@extends("layouts.landing")

@section("content")
	<x-overlay-container style="height: 720px;">
		<div class="row align-items-center justify-content-center h-100">
			<div class="col-auto text-center">
				<img class="img-fluid mx-auto" src="{{ asset('img/logo-big.png') }}" style="height: 320px;" />
				<div class="w-100 my-5"></div>
				<p class="h2 font-weight-bold blink">"Let's The Medieval Begin!"</p>
			</div>
		</div>
	</x-overlay-container>
	<x-container style="min-height: 480px; background-image: url('{{ asset('img/bg.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" class="py-5 align-items-center">
		<div class="h1 text-center font-weight-bold py-5 text-white">Apa itu Olimpus?</div>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8">
				<div class="card shadow">
					<div class="card-body">
						<p class="text-justify">
							Olimpus (Olimpiade Mahasiswa UNS) adalah serangkaian acara yang diadakan oleh Keluarga Besar Mahasiswa Universitas Sebelas Maret (KBM UNS). Acara ini merupakan penggabungan dari acara OSM (Olimpiade Sebelas Maret), FAM (Festival Apresiasi Mahasiswa), dan SEF (Sebelas Maret Education Fair). Acara ini terdiri dari kegiatan perlombaan Keolahragaan, Kesenian, Keilmiahan dan ditutup dengan Apresiasi Mahasiswa.
						</p>
					</div>
				</div>
				<div class="w-100 my-5"></div>
				<div class="text-center">
					<p class="h2 font-weight-bold text-light">Our Jingle</p>
					<audio src="{{ asset('music/jingle.mp3') }}" id="player" controls></audio>
				</div>
			</div>
		</div>
	</x-container>
	<x-container class="py-5">
		<div class="h1 text-center font-weight-bold py-5">✨ Bidang ✨</div>
		<div class="row">
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3">⚔️ Olahraga</p>
						<a href="{{ route('landing.olahraga.index') }}" class="btn btn-primary mt-3 w-100">Lihat</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3">💃 Seni Budaya</p>
						<a href="{{ route('landing.senibudaya.index') }}" class="btn btn-primary mt-3 w-100">Lihat</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3">🔬 Keilmiahan</p>
						<a href="{{ route('landing.keilmiahan.index') }}" class="btn btn-primary mt-3 w-100">Lihat</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3">💖 Apresiasi</p>
						<a href="{{ route('landing.apresiasi.index') }}" class="btn btn-primary mt-3 w-100">Lihat</a>
					</div>
				</div>
			</div>
		</div>
	</x-container>
	<x-container class="py-5 bgcomingsoon" style="color: white;">
		<div class="h1 text-center font-weight-bold">🎉 WAIT AND SEE IN 2021! 🎉</div>
	</x-container>
	<x-container class="py-5 text-light" style="background-image: url('{{ asset('img/bg-2.jpg') }}'); background-size: cover; background-attachment: fixed; background-position: center;" >
		<div class="h1 text-center font-weight-bold py-5">📹 Video Teaser 📹</div>
		@foreach($api['video'] as $val)
		<div class="row justify-content-center align-items-center my-5 py-5">
			<div class="col-12 text-center col-lg order-2 order-lg-{{ $loop->index % 2 == 0 ? 1 : 2}}" style=" height: 320px;">
				<iframe class="shadow rounded" src="{{ $val['link'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 100%;"></iframe>
			</div>
			<div class="col-12 col-lg text-center order-1 order-lg-{{ $loop->index % 2 == 0 ? 2 : 1}}">
				<p class="h1 font-weight-bold">{{ $val['title'] }}</p>
				<p>{{ $val['description'] }}</p>
			</div>
		</div>
		@endforeach
	</x-container>
	<x-container class="py-5">
		<div class="h1 text-center font-weight-bold py-5">🏆 Olimpus 2019 🏆</div>
		<div class="row">
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3 text-warning">Juara Umum</p>
						<p class="text-center font-weight-bold">Fak. Teknik</p>
					</div>
				</div>
			</div>
			<div class="w-100"></div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3 text-danger">Juara Umum Olahraga</p>
						<p class="text-center font-weight-bold">Fak. Keolahragaan</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3 text-success">Juara Umum Seni Budaya</p>
						<p class="text-center font-weight-bold">Fak. Teknik</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg my-3">
				<div class="card shadow h-100">
					<div class="card-body">
						<p class="text-center font-weight-bold h3 text-primary">Juara Umum Keilmiahan</p>
						<p class="text-center font-weight-bold">Fak. Kedokteran</p>
					</div>
				</div>
			</div>
		</div>
	</x-container>
@endsection