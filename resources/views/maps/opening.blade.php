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
					<table>
						<tr>
							<td>19.10</td>
							<td>Pembukaan</td>
						</tr>
						<tr>
							<td>19.15</td>
							<td>Indonesia Raya dan Mars Mahasiswa</td>
						</tr>
						<tr>
							<td>19.30</td>
							<td>Sambutan Ketua Olimpus</td>
						</tr>
						<tr>
							<td>19.35</td>
							<td>Sambutan Presiden BEM UNS</td>
						</tr>
						<tr>
							<td>19.40</td>
							<td>Sambutan Direktur Reputasi Akademik dan Kemahasiswaan</td>
						</tr>
						<tr>
							<td>19.45</td>
							<td>Theatrikal 1</td>
						</tr>
						<tr>
							<td>19.50</td>
							<td>KMF</td>
						</tr>
						<tr>
							<td>20.00</td>
							<td>Pengenalan Lomba Olimpus, Piala Bergilir, dan Janji Atlet-Wasit</td>
						</tr>
						<tr>
							<td>20.10</td>
							<td>Theatrikal 2</td>
						</tr>
						<tr>
							<td>20.15</td>
							<td>Parade dan Pembukaan secara Simbolis Olimpus + Pengenalan Maskot</td>
						</tr>
						<tr>
							<td>20.30</td>
							<td>Theatrikal 3</td>
						</tr>
						<tr>
							<td>20.35</td>
							<td>Video Coming Up Next</td>
						</tr>
						<tr>
							<td>20.40</td>
							<td>Penutupan</td>
						</tr>
						<tr>
							<td>20.45</td>
							<td>Flash Mob</td>
						</tr>
					</table>
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
	<script src="{{ asset('js/opening.js') }}"></script>
</body>

</html>