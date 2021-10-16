<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="hero-slideshow owl-carousel">
        @foreach($sliders as $slide)
        <!-- Single Slide -->
        <div class="single-slide bg-img">
            <!-- Background Image-->
            <div class="slide-bg-img bg-img bg-overlay" style="background-image: url({{asset(Voyager::image($slide->getAttribute('image')))}});"></div>
            <!-- Welcome Text -->
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-lg-9">
                        <div class="welcome-text text-center">
                            <h2 data-animation="fadeInUp" data-delay="300ms">{!! $slide->getTranslatedAttribute('main_text') !!}</h2>
                            <p data-animation="fadeInUp" data-delay="500ms">{!! $slide->getTranslatedAttribute('banner_text') !!}</p>
                            <a href="{!! $slide->getTranslatedAttribute('button_link') !!}" class="btn credit-btn mt-50" data-animation="fadeInUp" data-delay="700ms">
                                {!! $slide->getTranslatedAttribute('button_text') !!}
                            </a>
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
