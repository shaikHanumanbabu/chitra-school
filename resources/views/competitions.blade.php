@extends("layouts.app")

@section("content")


<!-- Breadcrumb Wrapper Start -->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(images/chithra-img-08.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Competitions</h2>
            <ul class="breadcrumb-sec list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li class="active">Competitions</li>
            </ul>
        </div>
    </div>
</section>
<!-- Breadcrumb Wrapper End -->




<!-- Service Sec Start -->
<section>

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
                            <a class="custom-btn effect" href="contact.html">Contac Us</a>
                        </div>
                        <div class="icon-lg">
                            <img src="images/icon-2.png" alt="" class="">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".0.3s" data-wow-duration="1s">
                    <div class="icon-bx-wraper right style-1">
                        <div class="icon-content">
                            <h4 class="dz-title theme-main-color">Colouring Competition Categories</h4>
                            <p class="fw-medium lead">Category I – Jr. KG & Sr. KG</p>
                            <p class="fw-medium lead">Category II – Std. I, II & III</p>
                            <a class="custom-btn effect" href="contact.html">Contac Us</a>
                        </div>
                        <div class="icon-lg"> 
                            <img src="images/staff.png" alt="" class="">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>

<section class="pricing-sec services">
    <div class="container pt-4">
        <div class="row">


            @foreach ($competitions as $competition)
            <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                <div class="single-pricing-sec h-100">
                    <span class="pricing-tag"><i class="icon icon-tools"></i></span>
                    <div class="single-pricing-sec-header">
                        <h2 class="single-pricing-sec-header-title">{{ $competition->getTitle() }}</h2>

                        <div class="single-pricing-sec-rating mt-3">
                            {!! $competition->description !!}
                        </div>
                    </div>


                    <div class="single-pricing-sec-price-wrapper">
                        <p class="single-pricing-plan-text">Entry Fee:</p>
                        <h4 class="single-pricing-plan-price mb-0"><sup>₹</sup>{{ $competition->entry_fee }}</h4>
                        <span class="single-pricing-plan-package">per student</span>
                    </div>
                </div>
            </div>
            @endforeach


            <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                <div class="single-pricing-sec h-100">
                    <span class="pricing-tag"><i class="icon icon-tools"></i></span>
                    <div class="single-pricing-sec-header">
                        <h2 class="single-pricing-sec-header-title">Cartoon Making Competition <span>– Make to Impress</span></h2>

                        <div class="single-pricing-sec-rating mt-3">
                            <p class="fw-normal lead theme-secondary-color">Unleash your imagination with your own cartoon characters!</p>
                        </div>
                    </div>

                    <div class="single-pricing-sec-content">
                        <p class="fw-medium theme-secondary-color">Age Groups:</p>
                        <ul>
                            <li>Tiny Talents – Nursery, LKG, UKG</li>
                            <li>Mini – Class I & II</li>
                            <li>Sub Juniors – Class III & IV</li>
                            <li>Juniors – Class V to VII</li>
                            <li>Seniors – Class VIII to X (Own artwork allowed)</li>
                        </ul>
                    </div>
                    <p class="mt-4">Students draw cartoons on blank sheets based on the theme</p>

                    <div class="single-pricing-sec-price-wrapper">
                        <p class="single-pricing-plan-text">Entry Fee:</p>
                        <h4 class="single-pricing-plan-price mb-0"><sup>₹</sup>100</h4>
                        <span class="single-pricing-plan-package">per student</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                <div class="single-pricing-sec h-100">
                    <span class="pricing-tag"><i class="icon icon-tools"></i></span>
                    <div class="single-pricing-sec-header">
                        <h2 class="single-pricing-sec-header-title">Finger & Thumb Painting <span>– Create to Impress</span></h2>

                        <div class="single-pricing-sec-rating mt-3">
                            <p class="fw-normal lead theme-secondary-color">Let tiny fingers make magical art!</p>
                        </div>
                    </div>

                    <div class="single-pricing-sec-content">
                        <p class="fw-medium theme-secondary-color">Age Groups:</p>
                        <ul>
                            <li>Tiny Talents – Nursery, LKG, UKG</li>
                            <li>Mini – Class I & II</li>
                            <li>Sub Juniors – Class III & IV</li>
                            <li>Juniors – Class V to VII</li>
                            <li>Seniors – Class VIII to X (Own artwork allowed)</li>
                        </ul>
                    </div>
                    <p class="mt-4">Any colour medium allowed</p>
                    <p>Picture will be provided</p>
                    <div class="single-pricing-sec-price-wrapper">
                        <p class="single-pricing-plan-text">Entry Fee:</p>
                        <h4 class="single-pricing-plan-price mb-0"><sup>₹</sup>100</h4>
                        <span class="single-pricing-plan-package">per student</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 mb-30">
                <div class="single-pricing-sec h-100">
                    <span class="pricing-tag"><i class="icon icon-tools"></i></span>
                    <div class="single-pricing-sec-header">
                        <h2 class="single-pricing-sec-header-title">Sketching Competition <span>– Stick to Impress</span></h2>

                        <div class="single-pricing-sec-rating mt-3">
                            <p class="fw-normal lead theme-secondary-color">A challenge for passionate sketch artists!</p>
                        </div>
                    </div>

                    <div class="single-pricing-sec-content mb-4">
                        <p class="fw-medium theme-secondary-color">Categories:</p>
                        <ul>
                            <li>Category I – Class IX & X</li>
                            <li>Category II – Intermediate (1st & 2nd Year)</li>
                            <li>Sub Juniors – Class III & IV</li>
                            <li>Category III – Degree Level</li>
                        </ul>
                    </div>

                    <div class="single-pricing-sec-price-wrapper">
                        <p class="single-pricing-plan-text">Entry Fee:</p>
                        <h4 class="single-pricing-plan-price mb-0"><sup>₹</sup>100</h4>
                        <span class="single-pricing-plan-package">per student</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@endsection