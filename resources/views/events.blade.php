@extends("layouts.app")

@section("content")

<!-- Breadcrumb Wrapper Start -->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(images/chithra-img-04.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Events</h2>
            <ul class="breadcrumb-sec list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="active">Events</li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Wrapper End -->


<!-- <section class="pt-5 pb-0">
    </section> -->



<section class="event-sec">

    <div class="container pricing-sec">
        <div class="section-title text-center">
            <span>Events</span>
            <p>Chithra's</p>
            <h1>Events</h1>
        </div>
    </div>

    <div class="container">
        <div class="row w-100 m-0">

            @foreach ($events as $event)
            <div class="event_product col-lg-6 col-md-6 col-sm-12 filter new">
                <div class="box d-flex">
                    <div class="icon-sec">
                        <img src="{{ asset($event->image) }}" alt="">
                    </div>
                    <div class="text-sec">
                        <h4>{{ $event->title }}</h4>
                        <p><i class="fa fa-calendar-o" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($event->date)->format('d-M-Y') }}</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $event->address }}
                        </p>
                    </div>
                    <!-- <div class="btns-sec">
                            <a href="event-details.html" class="btn">Apply Now</a>
                            <a href="event-details.html" class="btn btn-blue">Full Time</a>
                        </div> -->
                </div>
            </div>
            @endforeach







        </div>
    </div>
</section>



<!-- Events Section -->
<section class="features-sec memories-sec" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-12 mx-auto wow fadeInUp" data-wow-delay=".0.3s" data-wow-duration="1s">

                <div class="icon-bx-wraper right style-1">
                    <div class="icon-content">
                        <p class="fw-normal lead">Chithra Arts Presents</p>
                        <h4 class="dz-title m-b15">
                            <a>All India Art Talent Fest – 2025</a>
                        </h4>
                        <p class="fw-medium lead theme-secondary-color pb-2">"Splash your imagination. Sketch your dreams!"</p>
                        <a class="custom-btn effect" href="contact.html">Know More</a>
                    </div>
                    <div class="icon-lg">
                        <img src="images/icon-2.png" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection