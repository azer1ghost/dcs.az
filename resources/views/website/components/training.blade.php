<!-- ##### Features Area Start ###### -->
<section class="features-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>{{statictext('trainings', 'uptitle')}}</p>
                        <h2>{{statictext('trainings', 'header')}}</h2>
                    </div>
                    <h6>{{statictext('trainings','text')}}</h6>
                    <a href="{{route('trainings')}}" class="btn credit-btn mt-50">{{statictext('trainings', 'btn_text')}}</a>
                </div>
            </div>
            @foreach($trainings as $training)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-features-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="{{route('training', $training)}}"><img style="height: 200px" alt="{{$training->getTranslatedAttribute('name')}}" src="{{asset('storage/'.$training->image)}}">
                            <h5>{{$training->getTranslatedAttribute('name')}}</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Features Area End ###### -->
