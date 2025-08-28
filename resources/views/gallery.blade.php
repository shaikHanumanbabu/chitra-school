@extends("layouts.app")

@section("content")




<!-- Breadcrumb Wrapper Start -->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(images/chithra-img-04.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Gallery</h2>
            <ul class="breadcrumb-sec list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Wrapper End -->


<!-- <section class="pb-0">
    <div class="container">
        <div class="row"> 
            <div class="col-12 text-center">
                <h5>Stay tuned! Photos from the event will be uploaded soon.</h5>
            </div>
        </div>
    </div>
</section> -->


@foreach($galleries as $gallery)
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">{{ $gallery->title }}</h3>
        </div>

        <div class="card-body">
            @if($gallery->images->isEmpty())
            <p class="text-muted">No images uploaded in this gallery.</p>
            @else
            <div class="row">
                @foreach($gallery->images as $image)
                <div class="col-md-3 col-sm-4 col-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset($image->image_path) }}" class="card-img-top img-fluid" alt="Gallery Image">
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach


<!-- Gallery Section Start -->
<section class="content-wrapper gallery-area">
    <div class="container-fluid">

        <div class="row mb-4">
            <div class="col-12">
                <h3 class="gallery-title">Our Competitions</h3>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-01.jpg" data-fancybox="gallery"><img src="images/chithra-img-01.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-02.jpg" data-fancybox="gallery"><img src="images/chithra-img-02.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-03.jpg" data-fancybox="gallery"><img src="images/chithra-img-03.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-04.jpg" data-fancybox="gallery"><img src="images/chithra-img-04.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-05.jpg" data-fancybox="gallery"><img src="images/chithra-img-05.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-06.jpg" data-fancybox="gallery"><img src="images/chithra-img-06.jpg" alt=""></a> </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-07.jpg" data-fancybox="gallery"><img src="images/chithra-img-07.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-08.jpg" data-fancybox="gallery"><img src="images/chithra-img-08.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-09.jpg" data-fancybox="gallery"><img src="images/chithra-img-09.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-10.jpg" data-fancybox="gallery"><img src="images/chithra-img-10.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-11.jpg" data-fancybox="gallery"><img src="images/chithra-img-11.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-12.jpg" data-fancybox="gallery"><img src="images/chithra-img-12.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-13.jpg" data-fancybox="gallery"><img src="images/chithra-img-13.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-14.jpg" data-fancybox="gallery"><img src="images/chithra-img-14.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-15.jpg" data-fancybox="gallery"><img src="images/chithra-img-15.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-16.jpg" data-fancybox="gallery"><img src="images/chithra-img-16.jpg" alt=""></a> </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="single-gallery-img mb-30"> <a href="images/chithra-img-17.jpg" data-fancybox="gallery"><img src="images/chithra-img-17.jpg" alt=""></a> </div>
            </div>
        </div>

    </div>
</section>
<!-- Gallery Section End -->

@endsection