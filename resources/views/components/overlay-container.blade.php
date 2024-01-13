<div class="row justify-content-center " style="position: absolute; width: 100%;">
    <div class="carousel slide" id="imageSlideshow" data-ride="carousel" style="position: absolute; width: 100%;">
        <ol class="carousel-indicators">
            <li class="active" data-target="#imageSlideshow" data-slide-to="1"></li>
            <li data-target="#imageSlideshow" data-slide-to="2"></li>
            <li data-target="#imageSlideshow" data-slide-to="3"></li>
            <li data-target="#imageSlideshow" data-slide-to="4"></li>
            <li data-target="#imageSlideshow" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" style="{{ $style }}">
            <div class="carousel-item active" style="height: 100%; width: 100%; background-image: url('/img/slideshow/img1.jpg'); background-size: cover; background-attachment: fixed; background-position: center;"></div>
            <div class="carousel-item " style="height: 100%; width: 100%; background-image: url('/img/slideshow/img2.jpg'); background-size: cover; background-attachment: fixed; background-position: center;"></div>
            <div class="carousel-item " style="height: 100%; width: 100%; background-image: url('/img/slideshow/img3.jpg'); background-size: cover; background-attachment: fixed; background-position: center;"></div>
            <div class="carousel-item " style="height: 100%; width: 100%; background-image: url('/img/slideshow/img4.jpg'); background-size: cover; background-attachment: fixed; background-position: center;"></div>
            <div class="carousel-item " style="height: 100%; width: 100%; background-image: url('/img/slideshow/img5.jpg'); background-size: cover; background-attachment: fixed; background-position: center;"></div>
        </div>
		<a class="carousel-control-prev" href="#imageSlideshow" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#imageSlideshow" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
    </div>
</div>
<div class="row justify-content-center" style="{{ $style }} position: relative; background-color: rgba(0,0,0,0.75);">
	<div class="col-12 col-lg-10">
		{{ $slot }}
	</div>
</div>
