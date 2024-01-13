<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olimpus 2021</title>
	<link rel="stylesheet" href="{{ asset('css/opening.css') }}" />
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
</head>

<body>
	<div id="wrapper">
		<header>
			<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:32px" />
			<div>Olimpus 2021</div>
		</header>
		<main>
			<div id="content">
				<div id="comingsoon">
					<h1>Coming Soon</h1>
					<p id="countdown"></p>
				</div>
			</div>
		</main>
		<footer>
			<div>Copyright © 2021 Olimpus UNS. All rights reserved.</div>
		</footer>
	</div>

	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("Mar 20, 2021 19:00:00").getTime();

		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id="demo"
			document.getElementById("countdown").innerHTML = days + " hari, " + hours + " jam, " +
				minutes + " menit, " + seconds + " detik 😉";

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				document.getElementById("countdown").innerHTML = "Maintenance";
			}
		}, 1000);
	</script>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
</body>

</html>