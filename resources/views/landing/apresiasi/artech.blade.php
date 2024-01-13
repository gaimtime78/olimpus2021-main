<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">
	<title>Olimpus 2021 | Artech</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="shortcut icon" href="{{ asset('img/logo-big.png') }}" type="image/png">
	<style>
		html,
		body {
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: #000;
		}

		a:link,
		a:visited {
			color: #bdc3c7;
		}

		.credit {
			position: absolute;
			text-align: center;
			width: 100%;
			padding: 20px 0;
			color: #fff;
			font-weight: bold;
			display: flex;
			align-items: center;
		}
		.credit img {
			margin: 0 1rem;
		}
	</style>
</head>

<body>

	<div class="credit">
		<img src="{{ asset('img/logo-big.png') }}" alt="Olimpus" class="img-fluid" style="max-height:32px" />
		<div>Olimpus 2021 | Art and Technology Paradise</div>
	</div>

	<script src="{{ asset('js/three.min.js') }}"></script>
	<script src="{{ asset('js/panolens.min.js') }}"></script>

	<script>
		var panorama1, panorama2, viewer;

		panorama1 = new PANOLENS.ImagePanorama("{{ asset('img/artech/1.jpg') }}");
		panorama2 = new PANOLENS.ImagePanorama("{{ asset('img/artech/2.jpg') }}");

		viewer = new PANOLENS.Viewer({
			autoHideInfospot: false
		});
		viewer.add(panorama1);
		viewer.add(panorama2);

		// Linking between panoramas

		// Pair
		// panorama1.link(panorama2, new THREE.Vector3(3429.01, 1205.85, -3421.88));
		// panorama1.link(panorama2, new THREE.Vector3(0, 1205.85, -3421.88));
		panorama1.link(panorama2, new THREE.Vector3(-6000, 0, -1000));
		panorama2.link(panorama1, new THREE.Vector3(3000, 0, 2000));
	</script>

</body>

</html>