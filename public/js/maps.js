const player = document.getElementById("player");

document.getElementById("explore").onclick = function () {
    document.getElementById("overlay").style.display = "none";
    player.play();
    player.loop = true;
};

document.getElementById("opening-btn").onclick = function () {
    player.remove();
};

document.getElementById("opening-mobile-btn").onclick = function () {
    player.remove();
};
