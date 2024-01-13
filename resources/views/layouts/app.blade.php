<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Olimpus</title>	
	<style>
		* {
			font-family: sans-serif;
		}
		select, textarea, input {
			margin: 0.5rem 0;
		}
		td, th {
			border: 1px solid lightgray;
			padding: 0.25rem;
			/* word-wrap: break-word; */
			text-align: center;
		}
		table {
			margin: 1rem 0;
			/* table-layout: fixed; */
			width: 100%;
		}
		td img {
			height: 64px;
		}
	</style>
</head>

<body>
	<h1>Dashboard Olimpus</h1>
	<nav>
		<a href="/">Home</a>
		@auth
		<a href="{{ route('pendaftaran.index') }}">Data Pendaftar</a>
		<form method="POST" action="{{ route('logout') }}">
			@csrf
			<input type="submit" value="logout"/>
		</form>
		@else
		<a href="{{ route('login') }}">Login</a>
		@endauth
	</nav>
	@yield("content")
</body>

</html>