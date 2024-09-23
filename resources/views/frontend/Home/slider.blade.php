@foreach ($sliders as $slider)
<div class="header-carousel-item hero-section">
    <div class="hero-bg-half-1custom" style="background-image: url({{ asset('storage/' . $slider->image_link) }})"></div>
    <div class="hero-shape-1"></div>
    <div class="carousel-caption">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7 animated fadeInLeft">
                    <div class="text-sm-center text-md-start">
                        <h4 class="text-white text-uppercase fw-bold mb-4">{{$slider->top_sub_heading}}</h4>
                        <h1 class="display-2 text-white mb-4">{{$slider->heading}}</h1>
                        <p class="mb-5 fs-5">{{$slider->bottom_sub_heading}}</p>
                        <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                            <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                            <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="{{$slider->more_info_link}}">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
