<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/assets/images/fav.png') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/fontawesome-6.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/bootstrap.min.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('/assets/css/vendor/metismenu.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body class="index-eight">


    <!-- header three area start -->
    @include("nav")
    <!-- header three area end -->



    <!-- banner area start -->
    <div class="banner-area-eight">
        <div class="banckground-image-eight">
        </div>
    </div>
    <!-- banner area end -->


    <!-- content-area start -->
    @yield("content")
    <!-- content-area end -->



    <!-- search area start -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- search area end -->


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>
    <!-- back to top end -->



    <!-- header style two -->
    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
                <img src="{{ asset('/assets/images/logo/speckson.svg') }}" alt="Innovate">
            </div>
            <div class="inner-content">
                <p class="disc">
                    Innovate Architects is a full-service design firm providing architecture architecture.
                </p>
                <div class="contact-information--sidebar">
                    <h6 class="title">Contact Info</h6>
                    <div class="single-info">
                        <a href="#">+123 456 789 33</a>
                    </div>
                    <div class="single-info">
                        <a href="#">3 innovate Street, NY United <br> States of America</a>
                    </div>
                    <div class="single-info">
                        <a href="#">Innovate@gmail.com</a>
                    </div>
                    <h6 class="title mt--30">Office Address</h6>
                    <div class="single-info">
                        <a href="#">+Time Square, New York <br> USA, 3454</a>
                    </div>
                    <div class="rts-social-style-one">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
                </div>
            </div>
        </div>
        @include("mobile-nav")
    </div>
    <!-- header style two End -->


    <div class="grid-line">
        <div class="grid-lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>





    <!-- start loader -->
    <!-- <div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
    <!-- End loader -->


    <div id="anywhere-home">
    </div>

    <!-- scripts -->
    <script src="{{ asset('/assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/waw.js') }}"></script>

    <!-- gsap plugins -->
    <script src="{{ asset('/assets/js/vendor/gsap.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/metismenu.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/scrolltiger.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/scrolltoplugin.js') }}"></script>
    <!-- <script src="{{ asset('/assets/js/plugins/smoothscroll.js') }}"></script> -->
    <script src="{{ asset('/assets/js/plugins/splittext.js') }}"></script>
    <!-- gsap plugins end-->

    <script src="{{ asset('/assets/js/vendor/magnifying-popup.js') }}"></script>

    <!-- swiper JS 10.2.0 -->
    <script src="{{ asset('/assets/js/plugins/swiper.js') }}"></script>
    <script src="{{ asset('/assets/js/plugins/counterup.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/waypoint.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/chroma.min.js') }}"></script>
    <!-- bootstrap 5.0.2 -->
    <script src="{{ asset('/assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- dymanic Contact Form -->
    <script src="{{ asset('/assets/js/plugins/contact.form.js') }}"></script>

    <!-- main Js -->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
</body>

</html>