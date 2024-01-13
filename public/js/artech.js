// MENYIAPKAN PANORAMA

const panorama2 = addPanorama("2.jpg");
const panorama1 = addPanorama("1.jpg");
const panorama0 = addPanorama("0.jpg");
const panorama3 = addPanorama("3.jpg");
const panorama4 = addPanorama("4.jpg");
const panorama5 = addPanorama("5.jpg");
const panorama6 = addPanorama("6.jpg");
const panorama7 = addPanorama("7.jpg");
const panorama8 = addPanorama("8.jpg");
const panorama9 = addPanorama("9.jpg");

// MENAMBAHKAN FLOOR KE PANORAMA
addFloor(panorama0, panorama1, 1750, -1000, 1250);

addFloor(panorama1, panorama0, 3000, -1000, 250);
addFloor(panorama1, panorama9, 1500, -1500, -3000);
addFloor(panorama1, panorama2, -1000, -750, -500);

addFloor(panorama2, panorama1, -2750, -2000, -1250);
addFloor(panorama2, panorama3, 1000, -2500, 3500);

addFloor(panorama3, panorama2, -1750, -1750, 3000);
addFloor(panorama3, panorama4, 2750, -1500, -250);

addFloor(panorama4, panorama3, -1750, -1750, 1750);
addFloor(panorama4, panorama5, 1500, -1750, -2750);

addFloor(panorama5, panorama4, 500, -1750, -2250);
addFloor(panorama5, panorama6, 1000, -1750, 3500);

addFloor(panorama6, panorama5, -1000, -1500, -6750);
addFloor(panorama6, panorama7, 4000, -2250, 2500);

addFloor(panorama7, panorama6, 3000, -1250, -2000);
addFloor(panorama7, panorama8, -2000, -1500, -3000);

addFloor(panorama8, panorama7, -4000, -1750, 1500);
addFloor(panorama8, panorama9, 3750, -1750, 750);

addFloor(panorama9, panorama8, 250, -1500, 5000);
addFloor(panorama9, panorama1, 500, -1000, -3250);

//MENAMBAHKAN ART
addArt(panorama0, "0-1", -3750, 250, -3500);
addArt(panorama0, "0-2", -3000, 250, -3500);
addArt(panorama0, "0-3", -2250, 250, -3500);
addArt(panorama0, "0-4", -1250, 250, -3500);
addArt(panorama0, "0-5", -250, 750, -7000);
addArt(panorama0, "0-6", 1500, 500, -4250);
addArt(panorama0, "0-7", 3500, 500, -3750);
addArt(panorama0, "0-8", 7000, 750, -4250);

addArt(panorama1, "1-1", 500, -750, -3000);

addArt(panorama2, "2-1", 5000, -1000, 3000);
addArt(panorama2, "2-2", -1500, -1250, 5250);
addArt(panorama2, "2-3", 5750, -1000, 1000);
addArt(panorama2, "2-4", -250, -1250, 10500);
addArt(panorama2, "2-5", -3500, -1000, 2000);
addArt(panorama2, "2-6", 4250, -1000, 4500);
addArt(panorama2, "2-7", 2750, -1000, 5750);
addArt(panorama2, "2-8", 1250, -1000, 7250);
addArt(panorama2, "2-9", 1500, 500, -4500);
addArt(panorama2, "2-10", 3250, 500, -4750);
addArt(panorama2, "2-11", 4500, 500, -3750);
addArt(panorama2, "2-12", 6500, 500, -3500);


addArt(panorama3, "3-1", 3500, -250, 2250);
addArt(panorama3, "3-2", 5500, -250, 2000);
addArt(panorama3, "3-3", 5000, -250, 2250);
addArt(panorama3, "3-4", 6000, -250, 1750);
addArt(panorama3, "3-5", -4250, -250, -1250);
addArt(panorama3, "3-6", 8250, -500, 2000);
addArt(panorama3, "3-7", 2750, -500, -3000);
addArt(panorama3, "3-8", -1500, -500, -3000);
addArt(panorama3, "3-9", -4000, -250, -3000);
addArt(panorama3, "3-10", 1000, -500, -3000);
addArt(panorama3, "3-11", 4000, -500, 4000);

addArt(panorama4, "4-1", 2000, -750, 1000);
addArt(panorama4, "4-2", 3500, -1000, -250);
addArt(panorama4, "4-3", 3500, -1000, 500);
addArt(panorama4, "4-4", 4000, -1000, -1250);
addArt(panorama4, "4-5", 4250, -1000, -2000);
addArt(panorama4, "4-6", -2250, -1000, -1250);
addArt(panorama4, "4-7", -2750, -750, 250);
addArt(panorama4, "4-8", 1500, -750, 2000);
addArt(panorama4, "4-9", -250, -1500, 4750);
addArt(panorama4, "4-10", 1250, -1250, 3750);

addArt(panorama5, "5-1", -1750, -750, 0);
addArt(panorama5, "5-2", -1500, -750, 750);
addArt(panorama5, "5-3", -1250, -1000, 4250);
addArt(panorama5, "5-4", 3500, -1000, -2750);
addArt(panorama5, "5-5", 3750, -1000, 3750);
addArt(panorama5, "5-6", -2000, -1000, 4250);
addArt(panorama5, "5-7", -2000, -1000, 2750);
addArt(panorama5, "5-8", -2750, -1250, 2500);
addArt(panorama5, "5-9", -2750, -1250, 4500);
addArt(panorama5, "5-10", 4500, -1250, -1000);
addArt(panorama5, "5-11", 4500, -1250, 1750);
addArt(panorama5, "5-12", -1000, -1250, 6250);
addArt(panorama5, "5-13", 3750, -1000, 5750);
addArt(panorama5, "5-14", 3750, -1000, 8250);

addArt(panorama6, "6-2", 6500, -1750, -6000);
addArt(panorama6, "6-3", 5000, -1000, 2500);
addArt(panorama6, "6-4", 9750, -1000, -1250);
addArt(panorama6, "6-5", -1250, -1000, 750);
addArt(panorama6, "6-6", 3000, -750, 2500);
addArt(panorama6, "6-8", 9750, -1250, -2500);
addArt(panorama6, "6-9", 5000, -750, 3000);
addArt(panorama6, "6-10", 4500, -1250, -8750);
addArt(panorama6, "6-12", 8000, -1000, 0);
addArt(panorama6, "6-14", 6500, -1250, 2500);
addArt(panorama6, "6-15", -1250, -750, -500);
addArt(panorama6, "6-16", 9750, -1000, 2500);
addArt(panorama6, "6-17", 7500, -1000, -5000);
addArt(panorama6, "6-19", 9500, -750, 1250);
addArt(panorama6, "6-20", 6750, -1250, -5000);
addArt(panorama6, "6-21", 500, -1000, 2250);
addArt(panorama6, "6-22", -750, -750, 3000);

addArt(panorama7, "7-1", 2500, -1500, -3000);
addArt(panorama7, "7-2", -4250, -1250, 1250);
addArt(panorama7, "7-3", 3750, -1250, 3000);
addArt(panorama7, "7-4", -750, -1250, 3750);
addArt(panorama7, "7-5", -2250, -1250, 3750);
addArt(panorama7, "7-6", 750, -1500, 4500);
addArt(panorama7, "7-7", 2250, -1500, 4500);
addArt(panorama7, "7-8", 1000, -1500, -3750);
addArt(panorama7, "7-9", -4750, -1500, 3500);
addArt(panorama7, "7-10", -4750, -1000, -1000);

addArt(panorama8, "8-1", 2250, -1500, 4750);
addArt(panorama8, "8-2", -2000, -1250, -3000);
addArt(panorama8, "8-3", 5250, -1500, -4500);
addArt(panorama8, "8-4", 3000, -1000, -1000);
addArt(panorama8, "8-5", 2250, -250, 4750);
addArt(panorama8, "8-6", -1500, -1500, 4750);
addArt(panorama8, "8-7", 4250, -1500, -5500);
addArt(panorama8, "8-8", 2250, -1500, -5000);
addArt(panorama8, "8-9", 500, -1500, -4500);
addArt(panorama8, "8-10", -3500, -1250, -3000);
addArt(panorama8, "8-11", 500, -1500, 6000);

addArt(panorama9, "9-1", -750, -750, -5250);
addArt(panorama9, "9-2", -1750, -750, -5250);
addArt(panorama9, "9-3", -3000, -750, -5250);
addArt(panorama9, "9-4", -2000, -1000, 2250);
addArt(panorama9, "9-5", -3000, -1000, 1750);
addArt(panorama9, "9-6", -3750, -750, -1000);
addArt(panorama9, "9-7", -3750, -250, 0);
addArt(panorama9, "9-8", -3500, -1000, -2500);
addArt(panorama9, "9-9", -3750, -500, -1750);