@extends('frontend.layouts.master')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb-post" style="background-image: url({{ asset('storage/' . $post->image) }});">
        <div class="container text-center py-5" style="max-width: 900px;">
           
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">{{$post->title}}</h4>
            
        </div>
    </div>
    <!-- Header End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Blog</h4>
                <h1 class="display-4 mb-4">{{$post->title}}</h1>
                <p class="mb-0">{{$post->body}}</p>
            </div>
        </div>
     </div>
    <!-- Blog End -->
@endsection