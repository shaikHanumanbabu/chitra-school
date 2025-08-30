@extends("layouts.app")


@section("content")

<!-- Slider Sec -->
<div class="slider-area slider-layout1">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-1" class="slides">
            @foreach (\App\Models\Carousel::all() as $carousel)
            <img src="{{ asset($carousel->image) }}" alt="slider" title="#slider-direction-{{ $carousel->id }}" />
            @endforeach
        </div>

        @foreach (\App\Models\Carousel::all() as $carousel)
        <div id="slider-direction-{{ $carousel->id }}" class="t-cn slider-direction">
            <div class="slider-content s-tb slide-1">
                <div class="text-left title-container s-tb-c">
                    <div class="container">
                        <p class="item-subtitle">{{ $carousel->title_1 }}</p>
                        <h2 class="item-title">{{ $carousel->title_2 }}</h2>
                        <div class="item-paragraph">{!! $carousel->description !!}</div>
                        <!-- <ul class="item-btn">
                            <li><a href="service.html">Services<i class="fas fa-long-arrow-alt-right"></i></a></li>
                            <li><a href="https://www.youtube.com/watch?v=qz0aGYrrlhU" class="circle-btn popup_video"><span class="circle-icon"><i class="fas fa-play-circle"></i>Watch The Video</span></a></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach




    </div>
</div>
<div class="cloud d-none d-md-block"><img src="images/cloud.png" alt="cloud" class="img-responsive"></div>

<!-- Features Sec Start -->
<section class="features-sec pt-1" data-wow-delay="1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".0.3s" data-wow-duration="1s">

                <div class="icon-bx-wraper right style-1">
                    <div class="icon-content">
                        <h4 class="dz-title m-b15"><a href="services.html">Art Classes for Kids & Adults</a></h4>
                        <a class="custom-btn effect" href="services.html">Read More</a>
                    </div>
                    <div class="icon-lg">
                        <img src="images/icon-1.png" alt="" class="">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".0.6s" data-wow-duration="2s">

                <div class="icon-bx-wraper right style-1">
                    <div class="icon-content">
                        <h4 class="dz-title m-b15"><a href="services.html">Art Diploma Courses</a></h4>
                        <a class="custom-btn effect" href="services.html">Read More</a>
                    </div>
                    <div class="icon-lg">
                        <img src="images/icon-4.png" alt="" class="">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".0.9s" data-wow-duration="3s">

                <div class="icon-bx-wraper right style-1">
                    <div class="icon-content">
                        <h4 class="dz-title m-b15"><a href="services.html">Art Competitions for Students</a></h4>
                        <a class="custom-btn effect" href="services.html">Read More</a>
                    </div>
                    <div class="icon-lg">
                        <img src="images/icon-5.png" alt="" class="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Sec  End -->

<!-- About Sec Start -->
<section class="about-sec py-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-1-9 mb-lg-0">
                <div class="position-relative text-end">
                    <div class="about-block d-inline-block ps-sm-5">
                        <img src="images/chithra-img-about.jpg" class="rounded-circle z-index-1 position-relative" alt="...">
                    </div>
                    <div class="bg-primary p-6 rounded-circle position-absolute bottom-10 right-5 ani-top-bottom"></div>
                    <img src="images/logo.png" width="250" class="position-absolute top-10 left-n5 left-lg-n10 rounded-circle z-index-2 d-none d-sm-block" alt="...">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".1.2s">
                <div class="about-content ps-lg-4 pt-4 pt-md-0">
                    <h2 class="display-20 display-sm-15 display-xl-9 mb-3">
                        <span class="fw-bolder">Chithra</span> – The School of Art
                    </h2>
                    <p class="text-secondary lead title-font">Welcome to <span class="fw-medium">Chithra</span>, where imagination meets excellence!</p>
                    <p>We proudly launched <span class="fw-medium">Chithra – The School of Art</span> on <span class="fw-medium">September 20th, 2023</span>, with the mission to <span class="fw-medium">nurture creativity across all age groups</span>, including school students, homemakers, and working professionals.</p>
                    <p>Located in <span class="fw-medium">Sangareddy, Telangana</span>, Chithra has already grown to a thriving community of over <span class="fw-medium">200 members</span>.</p>
                    <p>Chithra – The School of Art is a nurturing space where creativity blossoms and artistic talents are shaped. Founded with the belief that every child is an artist, we provide structured, imaginative, and joyful art education for students of all ages. From basic sketches to advanced painting techniques, we guide each learner through their artistic journey with care and passion.</p>
                    <div class="row border-top border-bottom mt-4 py-4 mx-0">
                        <div class="col-sm-6 col-12 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/target.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0 h5">Extensive <br class="d-sm-block d-none">Experience</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/staff.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="mb-0 h5">Creative <br class="d-sm-block d-none">Staff</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about.html" class="theme-btn mt-4">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Sec End -->





<!-- Why Choose Start -->
<section class="about-sec">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".1.2s">
                <div class="about-content ps-lg-4 pt-4 pt-md-0">
                    <h2 class="fw-bold display-20 display-sm-15 display-xl-9 mb-3">
                        <span class="fw-bold">Why Choose</span> Chithra Arts?
                    </h2>

                    <div class="row my-4 mx-0">
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/target.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="h5 mb-0">Govt. Recognized Diploma Coaching</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/staff.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="h5 mb-0">Art Career Guidance</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/target.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="h5 mb-0">National & International Exposure</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/staff.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="h5 mb-0">50+ School Collaborations</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="images/target.png" alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="h5 mb-0">2+ Years of Legacy</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <img src="images/chithra-img-05.jpg" class="img-fluid rounded" alt="">
            </div>

        </div>
    </div>
</section>
<!-- Why Choose End -->


<!-- Service Sec Start -->
<section class="pt-0">

    <div class="container">
        <div class="section-title text-center">
            <span>Competitions</span>
            <h1>Competitions</h1>
            <p>FOR CREATIVE MINDS</p>
        </div>
    </div>

    <div class="features-sec memories-sec pb-0" data-wow-delay="1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto col-md-12 wow fadeInUp" data-wow-delay=".0.3s" data-wow-duration="1s">
                    <div class="icon-bx-wraper right style-1">
                        <div class="icon-content">
                            <h4 class="dz-title theme-main-color">Unlocking Confidence through Creativity</h4>
                            <p class="fw-normal lead">Competitions at Chithra help students step out of their comfort zones and embrace creative challenges. They learn that art isn't just about talent — it's about risk-taking, expression, and perseverance.</p>
                            <a class="custom-btn effect" href="competitions.html">Contac Us</a>
                        </div>
                        <div class="icon-lg">
                            <img src="images/icon-2.png" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection