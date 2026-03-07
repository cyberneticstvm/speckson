@extends("base")
@section("content")
<!-- Contact Me start -->
<div class="rts-right-content-area">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</div>
<!-- Contact Me end -->
@endsection