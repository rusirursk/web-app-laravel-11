@extends('frontend.layouts.master')

@section('content')
  <!-- Header Start -->
  <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Blog</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

   <!-- Blog Start -->
   <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="row g-4">
           @foreach ($posts as $post)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid w-100" alt="">
                        </div>
                        <div class="blog-heading ms-4">
                            <a href="#" class="h4 mb-0 p-4">{{$post->title }}</a>
                        </div>
                        <div class="blog-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-calendar me-2"></i> {{ $post->created_at->format('F j, Y') }}</p>
                              
                            </div>
                            <p class="mb-4">
                                {{ Str::limit($post->body, 50) }}
                            </p>
                            <a class="btn btn-primary py-2 px-4" href="/blog/{{$post->slug}}">Learn More</a>
                        </div>
                    </div>
                </div>
           @endforeach
           
        </div>

        <div class="d-flex justify-content-center">
            {{$posts->links('pagination::bootstrap-5')}}
        </div>
    </div>
 </div>
<!-- Blog End -->
@endsection
