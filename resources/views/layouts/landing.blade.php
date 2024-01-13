<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olimpus 2021</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
	<script src="{{ asset('js/play.js') }}"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark shadow">
		<a class="navbar-brand mr-auto" href="/">
			<img src="{{ asset('img/logo-big.png') }}" style="height: 32px" />
			<span class="mx-2 font-weight-bold"> Olimpus 2021 @yield('woi')</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" >
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="{{ route('landing.olahraga.index') }}" class="nav-link">Olahraga</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('landing.senibudaya.index') }}" class="nav-link">Seni Budaya</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('landing.keilmiahan.index') }}" class="nav-link">Keilmiahan</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('landing.apresiasi.index') }}" class="nav-link">Apresiasi</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid" style="margin-top: 48px;">
		@yield('content')
		<x-container class="bg-dark py-5" style="min-height: 320px;">
			<div class="row my-3">
				<div class="col-lg col-12 my-3">
					<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:128px"/>
				</div>
				<div class="col-lg col-12 my-3">
					<p class="h1 font-weight-bold text-light">Follow Us</p>
					<div class="mt-3">
						<img src="{{ asset('svg/instagram.svg') }}" style="width: 32px;"/>
						<a href="{{ $api['contact']['instagram'] }}" class="font-weight-bold text-light mx-3">Instagram</a>
					</div>
					<div class="mt-3">
						<img src="{{ asset('svg/youtube.svg') }}" style="width: 32px;"/> 
						<a href="{{ $api['contact']['youtube'] }}" class="font-weight-bold text-light mx-3">Youtube</a>
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-lg-6 col-12 text-light">
					<p>Copyright © 2021 Olimpus UNS. All rights reserved.</p> 
					<p>{{ $api['contact']['email'] }}</p>
				</div>
			</div>
		</x-container>
	</div>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	@yield('landing-js')
</body>
</html>