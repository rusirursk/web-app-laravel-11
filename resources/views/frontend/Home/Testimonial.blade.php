<div class="container-fluid testimonial bg-dark py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-xl-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-4 text-white mb-4">Powerfull Praise Heare From Our Customers</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia hic aspernatur unde magnam necessitatibus provident iusto maxime nobis esse eligendi.
                </p>
                <a class="btn btn-light py-3 px-5" href="#">View All Reviews</a>
            </div>
            <div class="col-lg-6 col-xl-7 wow fadeInUp" data-wow-delay="0.4s">
                <div class="owl-carousel testimonial-carousel">

                    @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
                        </div>
                        <div class="testimonial-inner p-4">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid" alt="">
                            <div class="ms-4">
                                <h4>{{$testimonial->name}}</h4>
                                <p> <p>{{$testimonial->profession}}</p></p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-body"></i>
                                </div>
                            </div>
                        </div>
                        <div class="customer-text p-4">
                            <p class="mb-0">{{$testimonial->description}}</p>
                        </div>
                    </div>
                    @endforeach
            
                   
                </div>
            </div>
        </div>
    </div>
 </div>