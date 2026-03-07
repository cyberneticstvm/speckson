@extends("base")
@section("content")
<div class="rts-right-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="thumbnail-banner-08">
                    <img src="{{ asset('/assets/images/banner/01.svg') }}" alt="banner" width="90%">
                </div>
            </div>
            <div class="col-lg-7">
                <!-- Portfolio start -->
                <div class="rts-about-right-area-eight bottom-1 rts-section-separator-right">
                    <div class="title-style-left mb--30">
                        <div class="pre-title-area">
                            <img src="{{ asset('/assets/images/about/02.png') }}" alt="about">
                            <span class="pre-title">Speckson Premium Eyewares</span>
                        </div>
                        <h3 class="title">Full Rim</h3>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <div class="single-project-style-8">
                                <a href="" class="thumbnail">
                                    <img src="{{ asset('/assets/images/product/1.png') }}" alt="product">
                                    <div class="tags">
                                        <span>Model: Speckson</span>
                                        <span>Brand: Eye Glass</span>
                                        <span>Material: Eye Glass</span>
                                    </div>
                                </a>
                                <div class="title-area">
                                    <a href="">
                                        <h4 class="title">Next<i
                                                class="fa-regular fa-chevron-right"></i></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio end -->
                <div class="copyright-8">
                    <p>Copyright {{ date('Y') }}. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection