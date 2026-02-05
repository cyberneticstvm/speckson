@extends("base")
@section("content")
<div class="rts-right-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-laft-compleate-project">
                    <img src="{{ asset('/assets/images/banner/02.svg') }}" alt="banner">
                </div>
                <div class="thumbnail-banner-08">
                    <img src="{{ asset('/assets/images/banner/01.svg') }}" alt="banner">
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Portfolio start -->
                <div class="rts-about-right-area-eight bottom-1 rts-section-separator-right">
                    <div class="title-style-left mb--30">
                        <div class="pre-title-area">
                            <img src="{{ asset('/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Glasses</span>
                        </div>
                        <h3 class="title">Products</h3>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/01.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/02.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/03.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio end -->
                <!-- Portfolio start -->
                <div class="rts-about-right-area-eight bottom-1 rts-section-separator-right">
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/01.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/02.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="single-project-style-8">
                                <a href="product-details-1.html" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/03.svg') }}" alt="product">
                                    <div class="tags">
                                        <span>Speckson</span>
                                        <span>Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="product-details-1.html">
                                        <h4 class="title">Speckson Eye Glass<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio end -->

                <!-- Contact Me start -->
                <div class="rts-about-right-area-eight bottom-1 rts-section-separator-right">
                    <div class="title-style-left mb--30">
                        <div class="pre-title-area">
                            <img src="{{ asset('/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Get In Touch</span>
                        </div>
                        <h3 class="title">Contact Us</h3>
                    </div>
                    <form action="#" class="form-8">
                        <input type="text" placeholder="Your Name" required>
                        <input type="text" placeholder="Your Number">
                        <input type="text" placeholder="Service Type">
                        <input type="text" placeholder="Your Location">
                        <button class="rts-btn btn-border">Send Now</button>
                    </form>
                </div>
                <!-- Contact Me end -->
                <div class="copyright-8">
                    <p>Copyright {{ date('Y') }}. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection