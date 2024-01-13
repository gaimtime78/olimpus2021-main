window.addEventListener("load", function() {
	// alert("Selamat Datang di Web Olimpus 2021 😁");
	const k = document.getElementById("player");
	k.loop = true;
	window.addEventListener("scroll", function() {
		// console.log(window.pageYOffset)
		if (window.pageYOffset < 400) {
			// alert('play');
			k.play();
		}
	})
})