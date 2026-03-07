@extends("base")
@section("content")
<!-- rts-banner-area -->
<div class="rts-banner-area-start-one pb--0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-right-content">
                    <div class="swiper mySwiper-banner-one-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single-swiper-area start -->
                                <div class="signle-swiper-start">
                                    <div class="thumbnail-banner-one">
                                        <img src="{{ asset('/assets/images/product/1.png') }}" alt="banner">
                                    </div>
                                </div>
                                <!-- single-swiper-area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single-swiper-area start -->
                                <div class="signle-swiper-start">
                                    <div class="thumbnail-banner-one">
                                        <img src="{{ asset('/assets/images/product/2.png') }}" alt="banner">
                                    </div>
                                </div>
                                <!-- single-swiper-area end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single-swiper-area start -->
                                <div class="signle-swiper-start">
                                    <div class="thumbnail-banner-one">
                                        <img src="{{ asset('/assets/images/product/3.png') }}" alt="banner">
                                    </div>
                                </div>
                                <!-- single-swiper-area end -->
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-swiper-area-start">
        <div class="right-shape">
            <img src="{{ asset('/assets/images/banner/icon/03.png') }}" alt="">
        </div>
        <div class="swiper mySwiper-banner-oneleft">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- single swiper area start -->
                    <div class="single-left-banner-swiper-start">
                        <span class="pre">Full Rim</span>
                        <h3 class="title">
                            Brand Name:<br>
                            Model:<br>
                            Material:
                        </h3>
                        <p class="disc">
                            Dia: , Temple Size: , Bridge Size: Product Weight:
                        </p>
                        <a href="#" class="rts-btn btn-border">View Details</a>
                    </div>
                    <!-- single swiper area end -->
                </div>
                <div class="swiper-slide">
                    <!-- single swiper area start -->
                    <div class="single-left-banner-swiper-start">
                        <span class="pre">Semi Rim</span>
                        <h3 class="title">
                            Brand Name:<br>
                            Model:<br>
                            Material:
                        </h3>
                        <p class="disc">
                            Dia: , Temple Size: , Bridge Size: Product Weight:
                        </p>
                        <a href="#" class="rts-btn btn-border">View Details</a>
                    </div>
                    <!-- single swiper area end -->
                </div>
                <div class="swiper-slide">
                    <!-- single swiper area start -->
                    <div class="single-left-banner-swiper-start">
                        <span class="pre">Rimless</span>
                        <h3 class="title">
                            Brand Name:<br>
                            Model:<br>
                            Material:
                        </h3>
                        <p class="disc">
                            Dia: , Temple Size: , Bridge Size: Product Weight:
                        </p>
                        <a href="#" class="rts-btn btn-border">View Details</a>
                    </div>
                    <!-- single swiper area end -->
                </div>
            </div>
        </div>
    </div>

    <div class="pagination-left-banner-one">
        <div class="activeslide">1</div>
        <div class="swiper-paginations"></div>
        <div class="totalslide">3</div>
        <!-- </div> -->
    </div>
</div>
<!-- rts-banner-area end -->
@endsection