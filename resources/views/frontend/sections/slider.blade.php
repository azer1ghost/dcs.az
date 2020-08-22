<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">

        @foreach($slides as $slide)
            <!-- Single Slide -->
            <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset('storage').'/'.$slide['image']}});"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms">{!!$slide['main_text']!!}</h2>
                            <p data-animation="fadeInUp" data-delay="500ms">{!!$slide['banner_text']!!}</p>
                            <a href="{!!$slide['button_link']  !!}" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">{{$slide['button_text']}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Duration Indicator -->
            <div class="slide-du-indicator"></div>
        </div>
        @endforeach



    </div>
</div>
<!-- ##### Hero Area End ##### -->