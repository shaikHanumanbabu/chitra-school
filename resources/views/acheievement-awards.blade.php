@extends("layouts.app")

@section("content")

   <!-- Breadcrumb Wrapper Start -->
   <section class="page-header">
        <div class="page-header-bg" style="background-image: url(images/chithra-img-05.jpg); background-position: top;">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Acheievement & Awards</h2>
                <ul class="breadcrumb-sec list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Acheievement & Awards</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Wrapper End -->


    <!-- Awards Sec Start -->
    <section class="awards-sec">
        <div class="container">
            <div class="section-title text-center">
                <span>Awards</span>
                <p>Chithra's</p>
                <h1>Awards & Recognition</h1>
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-10 col-lg-10 col-md-12 mx-auto wow fadeInUp" data-wow-delay=".1.2s">
                    <div class="awards-content bg-seconday">

                        <p class="fw-medium lead">Each group will be honored with:</p>

                        <div class="mt-4 py-2 mx-0">

                            <div class="award-list">
                                <div class="flex-shrink-0">
                                    <h3 class="prize-level">1st Prize</h3>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="prize-text">Memento + Certificate + Gold Medal</p>
                                </div>
                            </div>

                            <div class="award-list">
                                <div class="flex-shrink-0">
                                    <h3 class="prize-level">2nd Prize</h3>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="prize-text">Memento + Certificate + Silver Medal</p>
                                </div>
                            </div>

                            <div class="award-list">
                                <div class="flex-shrink-0">
                                    <h3 class="prize-level">3rd Prize</h3>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="prize-text">Memento + Certificate + Silver Medal</p>
                                </div>
                            </div>

                            <div class="award-list">
                                <div class="flex-shrink-0">
                                    <h3 class="prize-level">Consolation Prize</h3>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="prize-text">Certificate + Gold Medal</p>
                                </div>
                            </div>
                        </div>

                        <p class="fw-bold lead mb-4">Every participant gets a Printed Certificate of Participation</p>

                        <p class="fw-normal lead">Special appreciation prizes for outstanding creativity!
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Sec End -->




    <section class="features-sec memories-sec pt-1" data-wow-delay="1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto wow fadeInUp" data-wow-delay=".0.3s" data-wow-duration="1s">

                    <div class="icon-bx-wraper right style-1">
                        <div class="icon-content">
                            <h4 class="dz-title m-b15"><a href="services.html">Memories That Last a Lifetime</a></h4>
                            <p class="fw-normal lead">Past events witnessed 1000s of students proudly showcasing their talent and receiving awards.</p>
                            <p class="fw-medium lead theme-secondary-color">Let your child be part of the celebration!</p>
                            <a class="custom-btn effect" href="services.html">Read More</a>
                        </div>
                        <div class="icon-lg"> 
                            <img src="images/staff.png" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection