@extends('frontend.layouts.master')

@section('content')
   
 <!-- Modal Search Start -->
 <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center bg-primary">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Search End -->


<!-- Carousel Start -->
<div class="header-carousel owl-carousel overflow-hidden">
   @include('frontend.Home.Slider')
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-4 mb-4">Providing you with the highest quality of features</h1>
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <a href="#" class="d-flex">
                                <span class="fas fa-bolt fa-3x me-3"></span>
                                <h4 class="mb-0">Emergency Power Solution</h4>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="d-flex">
                                <span class="fas fa-broadcast-tower fa-3x me-3"></span>
                                <h4 class="mb-0">Full-Service Electrical Layout</h4>
                            </a>
                        </div>
                    </div>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, minus. At velit nam, animi culpa fugiat neque facere illum, eum possimus omnis accusantium deleniti consectetur temporibus necessitatibus asperiores sunt dicta?
                    </p>
                    <div class="text-dark mb-4">
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Installed, maintained and repaired lighting for clients.</p>
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Increasingly popular way to generate electricity.</p>
                        <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Protect electrical devices from damage.</p>
                    </div>
                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">Contact us</a>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="position-relative h-100">
                    <img src="{{asset('frontend/img/about-1.jpg')}}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                    <div class="bg-white">
                        <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                            <div class="bg-primary p-4">
                                <h4 class="display-2 mb-0">25+</h4>
                                <p class="text-white fs-5 mb-0">years of experience</p>
                            </div>
                        </div>
                        <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                            <img src="{{asset('frontend/img/about-2.jpg')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Banner Start -->
 <div class="container-fluid banner py-5 wow zoomIn" data-wow-delay="0.2s">
    <div class="banner-design-1"></div>
    <div class="banner-design-2"></div>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="">
                    <h4 class="text-white">Contact With Me</h4>
                    <h1 class="display-4 text-white mb-0">We provide professional electric services for our customer</h1>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-lg-end h-100">
                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">EXPLORE MORE</a>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Banner End -->


<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            <h1 class="display-4 mb-4">The Best Service For You</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                <ul class="nav">
                    <li class="nav-item me-lg-0 mb-4">
                        <a class="py-3 px-5 active" data-bs-toggle="pill" href="#ServiceTab-1">
                            <span>Commercial</span>
                        </a>
                    </li>
                    <li class="nav-item me-lg-0 mb-4">
                        <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-2">
                            <span>Residential</span>
                        </a>
                    </li>
                    <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                        <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-3">
                            <span>Industrial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                <div class="tab-content">
                    <div id="ServiceTab-1" class="tab-pane fade show p-0 active">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="{{asset('frontend/img/commercial-1.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Brite Spark Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('frontend/img/commercial-2.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Energy Ease Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="{{asset('img/commercial-3.jpg')}}" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electra Care Packages</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-2" class="tab-pane fade show p-0">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="img/residential-1.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electrical Services</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/residential-2.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Security Systems</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/residential-3.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Air Conditioner</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="ServiceTab-3" class="tab-pane fade show p-0">
                        <div class="service-carousel owl-carousel">
                            <div class="service-item">
                                <img src="img/industrial-1.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Factory Manufacture</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/industrial-2.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">General Electrical</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="service-item">
                                <img src="img/industrial-3.jpg" class="img-fluid w-100" alt="">
                                <div class="border border-top-0 p-4">
                                    <h4 class="mb-3">Electrical Planing</h4>
                                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, beatae ex. Id esse autem ratione vero cupiditate tempora recusandae est!
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->




<!-- Team Start -->
 <div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-4 mb-4">Electricity Service offerings</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, deserunt provident ab voluptates rerum eaque eum magni autem atque in minus laboriosam corrupti deleniti voluptatibus rem reiciendis modi veniam animi?
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                        <div class="team-icon">
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content bg-light text-center p-4">
                        <h4>Shoaib Bashir</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
<!-- Team End -->


<!-- Testimonial Start -->
@include('frontend.Home.testimonial')
<!-- Testimonial End -->


@endsection
