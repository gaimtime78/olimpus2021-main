/**
 * DEVELOPER MODE
 */
const devMode = true;

let currentId = 0;
function eId(id) {
	return document.getElementById(id);
}
function eClass(c) {
	return document.querySelectorAll("." + c);
}

function reset() {
	eId("overlay").style.display = "none";
	eId("desc-container").style.display = "none";
	eClass("art-img").forEach(function (el) {
		el.style.display = "none";
	});
	eClass("desc-img").forEach(function (el) {
		el.style.display = "none";
	});
}
function open(artid) {
	eId("overlay").style.display = "flex";
	eId("art-" + artid).style.display = "";
	currentId = artid;
}
function toggleDesc() {
	const visible =
		eId("desc-container").style.display === "flex" ? true : false;
	if (!visible) {
		// alert('not visible')
		eId("desc-container").style.display = "flex";
		eId("desc-" + currentId).style.display = "";
	} else {
		// alert('visible')
		eId("desc-container").style.display = "none";
		eId("desc-" + currentId).style.display = "none";
	}
}

function addArt(panorama, id, x, y, z) {
	const infospot = new PANOLENS.Infospot();
	infospot.position.set(x, y, z);
	infospot.addEventListener("click", function () {
		open(id);
	});
	panorama.add(infospot);
}
function addFloor(p1, p2, x, y, z) {
	p1.link(p2, new THREE.Vector3(x, y, z));
}
function addHelper(panorama) {
	var copyText = eId("copytext");
	const helper = new PANOLENS.Infospot();
	helper.position.set(0, -1000, -3000);
	helper.addHoverText(
		`${helper.position.x} ${helper.position.y} ${helper.position.z}`
	);
	window.addEventListener("keydown", function (e) {
		const distance = 250;
		if (e.key === "w") {
			helper.position.y += distance;
		}
		if (e.key === "s") {
			helper.position.y -= distance;
		}
		if (e.key === "a") {
			const sign = helper.position.z < 0 ? 1 : -1;
			helper.position.x -= sign * distance;
		}
		if (e.key === "d") {
			const sign = helper.position.z < 0 ? 1 : -1;
			helper.position.x += sign * distance;
		}
		if (e.key === "e") {
			helper.position.z += distance;
		}
		if (e.key === "q") {
			helper.position.z -= distance;
		}
		if (e.key === "x") {
			helper.hide();
			helper.position.set(0, -1000, -3000);
			copyText.style.display = "none";
		}
		if (e.key === "z") {
			helper.show();
			helper.focus();
			copyText.style.display = "";
		}
		helper.setText(
			`${helper.position.x} ${helper.position.y} ${helper.position.z}`
		);
	});
	helper.addEventListener("click", function () {
		copyText.setAttribute(
			"value",
			`${helper.position.x}, ${helper.position.y}, ${helper.position.z}`
		);
		copyText.select();
		copyText.setSelectionRange(0, 99999);
		document.execCommand("copy");
		alert("coppied");
	});
	helper.hide();
	panorama.add(helper);
}
function addPanorama(image) {
	const panorama = new PANOLENS.ImagePanorama(
		"/img/artech_final/panorama/" + image
	);

	if (devMode) {
		addHelper(panorama);
	} else {
		eId("copytext").style.display = "none";
	}

	viewer.add(panorama);
	return panorama;
}
const viewer = new PANOLENS.Viewer({
	autoHideInfospot: false,
	container: eId("viewer"),
});

function init() {
	reset();

	eId("overlay-close").onclick = function () {
		reset();
	};

	eId("overlay-desc-toggle").onclick = function () {
		toggleDesc();
	};
}
window.onload = function () {
	init();
};
