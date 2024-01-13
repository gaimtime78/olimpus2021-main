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
				<div id="video">
					<iframe src="https://www.youtube.com/embed/l2MiEzS1WCI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div id="rundown">
					<h2>Rundown</h2>
					<ol>
						<li>Light Show</li>
						<li>MC Sounding</li>
						<li>Pembacaan Doa</li>
						<li>Indonesia Raya</li>
						<li>Penayangan Storyline</li>
						<li>Sambutan Ketua Olimpus</li>
						<li>Sambutan Presiden BEM UNS</li>
						<li>Sambutan Prof Jamal / Prof Yunus / Pak Sutanto</li>
						<li>Break Adzan Isya</li>
						<li>Penutupan Simbolisasi Olimpus</li>
						<li>Duta Kampus Segmen 1</li>
						<li>Awarding 1</li>
						<li>Awarding 2</li>
						<li>Awarding 3</li>
						<li>Penampilan Komda</li>
						<li>Duta Kampus Sesi 2</li>
						<li>Awarding 4</li>
						<li>Awarding 5</li>
						<li>Awarding 6</li>
						<li>Awarding 7</li>
						<li>Penampilan Pemenang Modern Dance</li>
						<li>Final Duta Kampus</li>
						<li>Penyerahan Vandel ke Humas UNS, IQ, 11 BEM, 2 Himpunan, Komunitas Duta Kampus</li>
						<li>Penyerahan piala juara umum, juara keolahragaan, juara penalaran, juara seni</li>
						<li>Penampilan pemenang lomba band</li>
						<li>Closing MC</li>
					</ol>
				</div>
			</div>
			<div id="chats">
				<div id="write">
					<h2>Live Chat</h2>
					<form onsubmit="return sendMessage();">
						<input type="text" name="username" id="username" placeholder="username" />
						<input type="hidden" name="color" id="color" value="" />
						<textarea name="message" id="message" placeholder="message" autocomplete="FALSE"></textarea>
						<input type="submit" value="send" />
					</form>
					<p style="font-family: monospace">
						Untuk menambahkan emoji pada Windows 10, tekan Windows + tanda titik (.) di keyboard
					</p>
				</div>
				<div id="read">
					<div id="chatbox"></div>
				</div>
			</div>
		</main>
		<footer>
			<div>Copyright © 2021 Olimpus UNS. All rights reserved.</div>
		</footer>
	</div>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
	<script src="{{ asset('js/closing.js') }}"></script>
</body>

</html>