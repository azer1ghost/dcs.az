<!-- ##### Features Area Start ###### -->
<section class="features-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>{{$feature['uptitile']}}</p>
                        <h2>{{$feature['title']}}</h2>
                    </div>
                    <h6>{{$feature['text']}}</h6>
                    <a href="{{$feature['btn_url']}}" class="btn credit-btn mt-50">{{$feature['btn_text']}}</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                    <img src="{{ asset('storage/'.$feature['img_1'])}}" alt="">
                    <h5>{{$feature['img_title1']}}</h5>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{ asset('storage/'.$feature['img_2'])}}" alt="">
                    <h5>{{$feature['img_title2']}}</h5>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <img src="{{ asset('storage/'.$feature['img_3'])}}" alt="">
                    <h5>{{$feature['img_title3']}}</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Features Area End ###### -->