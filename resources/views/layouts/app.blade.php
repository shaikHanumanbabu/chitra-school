<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title', 'CHITHRA – The School of Art')</title>
    <!-- Plugins CSS -->
    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
</head>


<body>

    <!-- Pre Loader -->
    <div id="dvLoading"></div>


    <!-- Marquee Section -->
    <div class="topbar-marquee">
        <marquee width="100%" direction="left" behavior="scroll" scrollamount="5" onMouseOver="this.stop()" onMouseOut="this.start()"><strong>{{ \App\Models\Information::where('id', 1)->get()->first()->title }}</strong></marquee>
        </marquee>
    </div>


    <!-- Header Sec -->
    <header class="header01 isSticky">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-2 col-md-4">
                    <div class="logo">
                        <a href="{{ url("/") }}"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8">
                    <div class="topbar">
                        <p><i class="twi-bolt"></i>Need Help: Providing Innovative and Easy Solutions, Call 08455-315262</p>
                        <div class="tpRight">
                            <a class="lang" href="javascript:void(0);"><i class="twi-globe2"></i>English</a>
                            <div class="tpSocail">
                                <a href="javascript:void(0);"><i class="twi-facebook-f"></i></a>
                                <a href="javascript:void(0);"><i class="twi-twitter"></i></a>
                                <a href="javascript:void(0);"><i class="twi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="navbar01">
                        <nav class="mainMenu">
                            <ul>
                                <li class="current-menu-item">
                                    <a href="{{ url("/") }}">Home</a>
                                </li>
                                <li><a href="{{ route("aboutus") }}">About Us</a></li>
                                <li><a href="{{ route("services") }}">Services</a></li>
                                <li><a href="{{ route("events") }}">Events</a></li>
                                <li><a href="{{ route("competitions") }}">Competitions</a></li>
                                <li><a href="{{ route("acheievement-awards") }}">Awards</a></li>
                                <li><a href="{{ route("gallery") }}">Gallery</a></li>

                                <!-- <li class="menu-item-has-children">
                                <a href="events.html">Events</a>
                                <ul class="sub-menu">
                                    <li><a href="competitions.html">Competitions</a></li>
                                    <li><a href="acheievement-awards.html">Acheievement & Awards</a></li>
                                </ul>
                            </li> -->
                                <!-- <li><a href="contact.html">Contact Us</a></li> -->

                                <!-- <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Multi Level Menu</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Elements</a>
                                        <ul class="sub-menu">
                                            <li><a href="accordion.html">Accordion</a></li>
                                            <li><a href="buttons.html">Buttons</a></li>
                                            <li><a href="toggles.html">Toggles</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="terms-condition.html">Terms & Conditions</a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li> -->
                            </ul>
                        </nav>

                        <div class="accessNav">
                            <a href="javascript:void(0);" class="menuToggler"><i class="twi-bars1"></i></a>
                            <!-- <div class="searchBtn">
                            <a href="javascript:void(0);"><i class="twi-search2"></i></a>
                            <div class="header01SearchBar">
                                <form class="d-flex" method="post" action="#">
                                    <input type="search" name="s" placeholder="Search Here...">
                                    <button type="submit"><i class="twi-search2"></i></button>
                                </form>
                            </div>
                        </div> -->
                            <a href="{{ route("contact") }}" class="theme-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Nav -->
    <section class="sidebarMenu">
        <div class="sidebarMenuOverlay"></div>
        <div class="SMArea">
            <div class="SMAHeader">
                <h3>
                    <i class="twi-bars1"></i> Menu
                </h3>
                <a href="javascript:void(0);" class="SMACloser"><i class="twi-times2"></i></a>
            </div>
            <div class="SMABody">
                <ul>
                    <li class="current-menu-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="competitions.html">Competitions</a></li>
                    <li><a href="acheievement-awards.html">Awards</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <div class="quote-part mfp-hide" id="quote-popup">
        <div class="container">
            <div class="section-title">
                <h4 class="section-span">Get A Quote</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form class="quote-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <input type="text" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="col-md">
                                <input type="text" class="form-control" placeholder="Subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="theme-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @yield('content')



    <!-- Footer Sec Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="aboutWidget">
                        <h5>Do you have questions? Call or visit us.</h5>
                        <div class="phone"><i class="twi-phone"></i>08455-315262</div>
                        <p>PNR Complex, 2nd Floor, Road No. 3, Beside Govt. High School, Vidyanagar, Pothireddypally, Sangareddy, Telangana.</p>
                        <!-- <a href="mailto:saiswastikads@gmail.com"><span class="__cf_Email__">saiswastikads@gmail.com</span></a> -->
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="widget ps-lg-4">
                        <h3 class="widget_title">Services</h3>
                        <ul class="menu">
                            <li><a href="services.html">Art Classes for Kids & Adults</a></li>
                            <li><a href="services.html">Drawing & Painting Studio</a></li>
                            <li><a href="services.html">Art Diploma Courses</a></li>
                            <li><a href="services.html">Art Competitions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 col-xl-3">
                    <div class="widget ps-lg-4">
                        <h3 class="widget_title">Usefull Links</h3>
                        <ul class="menu">
                            <li><a href="{{ route("aboutus") }}">About Us</a></li>
                            <li><a href="{{ route("services") }}">Services</a></li>
                            <li><a href="{{ route("competitions") }}">Competitions</a></li>
                            <li><a href="{{ route("contact") }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="widget gallery">
                        <h3 class="widget_title mb-4">Gallery</h3>
                        <div class="galleryShots">
                            <a class="popup_img" href="images/chithra-img-03.jpg"><img src="images/chithra-img-03.jpg" alt=""></a>
                            <a class="popup_img" href="images/chithra-img-04.jpg"><img src="images/chithra-img-04.jpg" alt=""></a>
                            <a class="popup_img" href="images/chithra-img-05.jpg"><img src="images/chithra-img-05.jpg" alt=""></a>
                            <a class="popup_img" href="images/chithra-img-06.jpg"><img src="images/chithra-img-06.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Sec Start -->

    <!-- Copyright Sec Start -->
    <div class="fcopyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>&copy; Copyright <span id="year"></span> Chithra - The School of Art | All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="copyMenu">
                        <ul>
                            <li><a href="privacy-policy.html">Privacy</a></li>
                            <li><a href="terms.html">Terms</a></li>
                            <li><a href="{{ route("contact") }}">Contact</a></li>
                            <li><a href="{{ route("aboutus") }}">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright Sec End -->


    <!--jQuery js -->
    <script src="{{ asset('js/jquery-min.js') }}"></script>
    <!--Bootstrap js -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!--jQuery appear js -->
    <script src="{{ asset('js/jquery.appear.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('js/wow.js') }}"></script>
    <!--jQuery js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Odometer js -->
    <script src="{{ asset('js/odometer.min.js') }}"></script>
    <!-- jQuery Appear js -->
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <!-- Countdown min js -->
    <script src="{{ asset('js/countdown.min.js') }}"></script>
    <!--nivo slider js -->
    <script src="{{ asset('js/jquery.nivo.slider.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <!-- MagnificPopup JS -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Sal Js -->
    <script src="{{ asset('js/sal.js') }}"></script>
    <!-- lightcase Js -->
    <script src="{{ asset('js/lightcase.js') }}"></script>
    <!--Fontawesome js -->
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <!-- owl JS -->
    <script src="{{ asset('js/owl.js') }}"></script>
    <!--Custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>