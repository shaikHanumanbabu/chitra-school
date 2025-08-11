@extends("layouts.app")

@section("content")

    <!-- Breadcrumb Wrapper Start -->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(images/chithra-img-01.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact Us</h2>
                <ul class="breadcrumb-sec list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Wrapper End -->
    <!-- Content Wrapper Start -->
    <section class="content-wrapper contact-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center mb-0">
                                <h6 class="mb-2">Contact Us</h6>
                                <h1>Contact With Us</h1>
                            </div>
                        </div>
                        <div class="contact-form-wrap text-center mt-50">
                            <form id="contact-form" action="mail.php" method="POST"
                                class="contat-input contact-page-input">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                                        <input type="email" name="email" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                                        <input type="text" name="subject" placeholder="Your Phone">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                                        <textarea name="message" id="message" cols="30" rows="6"
                                            placeholder="Write Message"></textarea>
                                    </div>
                                    <div class="details-page-wrap">
                                        <button type="submit" class="theme-btn"><i class="far fa-paper-plane me-2"></i>Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Content Wrapper End -->
    <section class="location-area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-sm-12 col-12">
                    <div class="section-title location-title mb-0">
                        <h1>Our Location</h1>
                        <p>CHITHRA – The School of Art</p>
                    </div>
                    <div class="location-wrap">
                        <div class="contact-address">
                            <i class="ti-map"></i>
                            <div class="address-content">
                                <h6>Address</h6>
                                <span>PNR Complex, 2nd Floor, Road No. 3, <br>
                                    Beside Govt. High School, Vidyanagar, <br>
                                    Pothireddypally, Sangareddy, Telangana.
                                </span>
                            </div>
                        </div>
                        <div class="contact-address">
                            <i class="ti-email"></i>
                            <div class="address-content">
                                <h6>Email</h6>
                                <span>
                                    <!-- <a href="mailto:saiswastikads@gmail.com">saiswastikads@gmail.com</a> -->
                                    <!-- <br>
                                    <a href="mailto:support@youremail.com">support@youremail.com</a> -->
                                </span>
                            </div>
                        </div>
                        <div class="contact-address">
                            <i class="ti-headphone"></i>
                            <div class="address-content">
                                <h6>Phone</h6>
                                <span>
                                    <a href="tel:+91 8790700807">+91 8790700807</a>, <br>
                                    <a href="tel:+91 9912642908">+91 9912642908</a>, <br>
                                    <a href="tel:08455-315262"> 08455-315262</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-sm-12 col-12">
                    <div class="location-map mobt-50 mt-4 mt-md-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d799.5338869361093!2d78.07930522549165!3d17.59107104277888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbf989c3a01681%3A0xfe91b572fc47e983!2sPNR%20BUILDING!5e0!3m2!1sen!2sin!4v1751115420819!5m2!1sen!2sin" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection