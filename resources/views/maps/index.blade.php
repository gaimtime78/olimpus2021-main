<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olimpus 2021</title>
	<link rel="stylesheet" href="{{ asset('css/maps.css') }}" />
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
</head>

<body>
	<div id="overlay">
		<div class="window">
			<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" />
			<h1>Olimpus 2021</h1>
			<div class="tagline">"Let's The Medieval Begin!"</div>
			<audio src="{{ asset('music/jingle.mp3') }}" id="player"></audio>
			<button id="explore">Explore!</button>
		</div>
	</div>
	<div id="wrapper">
		<header>
			<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:32px" />
			<div>Olimpus 2021</div>
		</header>
		<div id="maps-container">
			<div id="btn-container">
				<a target="_blank" href="{{ route('maps.closing') }}" class="btn-maps" id="closing-btn">Closing Ceremony</a>
				<a target="_blank" href="{{ route('maps.lomba') }}" class="btn-maps" id="lomba-btn">Lomba Bidang</a>
				<a target="_blank" href="{{ route('maps.artech') }}" class="btn-maps" id="artech-btn">Art and Technology Paradise</a>
				<a target="_blank" href="{{ route('maps.opening') }}" class="btn-maps" id="opening-btn">Opening Ceremony</a>
			</div>
			<img src="{{ asset('img/maps3/full.jpg') }}" />
		</div>
		<div id="mobile-btn-container">
			<!-- Opening -->
			<div class="mobile-btn">
				<div class="mobile-btn-maps-img">
					<img src="{{ asset('img/maps3/opening.png') }}" />
				</div>
				<div class="mobile-btn-text-container">
					<div class="mobile-btn-title">
						Opening Ceremony
					</div>
					<div class="mobile-btn-control">
						<a target="_blank" href="{{ route('maps.opening') }}" id="opening-mobile-btn" class="mobile-btn-maps">Enter Stage</a>
					</div>
				</div>
			</div>
			<!-- Artech -->
			<div class="mobile-btn">
				<div class="mobile-btn-maps-img">
					<img src="{{ asset('img/maps3/artech.png') }}" />
				</div>
				<div class="mobile-btn-text-container">
					<div class="mobile-btn-title">
						Art and Technology Paradise
					</div>
					<div class="mobile-btn-control">
						<a target="_blank" href="{{ route('maps.artech') }}" id="artech-mobile-btn" class="mobile-btn-maps">Enter Stage</a>
					</div>
				</div>
			</div>
			<!-- Lomba Bidang -->
			<div class="mobile-btn">
				<div class="mobile-btn-maps-img">
					<img src="{{ asset('img/maps3/lomba.png') }}" />
				</div>
				<div class="mobile-btn-text-container">
					<div class="mobile-btn-title">
						Lomba Bidang
					</div>
					<div class="mobile-btn-control">
						<a target="_blank" href="{{ route('maps.lomba') }}" id="lomba-mobile-btn" class="mobile-btn-maps">Enter Stage</a>
					</div>
				</div>
			</div>
			<!-- Closing -->
			<div class="mobile-btn">
				<div class="mobile-btn-maps-img">
					<img src="{{ asset('img/maps3/closing.png') }}" />
				</div>
				<div class="mobile-btn-text-container">
					<div class="mobile-btn-title">
						Closing Ceremony
					</div>
					<div class="mobile-btn-control">
						<a target="_blank" href="{{ route('maps.closing') }}" id="closing-mobile-btn" class="mobile-btn-maps">Enter Stage</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div>Copyright © 2021 Olimpus UNS. All rights reserved.</div>
		</footer>
	</div>
	<script src="{{ asset('js/maps.js') }}"></script>
</body>

</html>