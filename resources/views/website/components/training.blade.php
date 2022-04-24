<!-- ##### Features Area Start ###### -->
<section class="features-area py-5" style="background-color: #ffdfa1;">
    <div class="container">
        <div class="row align-content-center">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-features-area wow fadeInUp" data-wow-delay="100ms">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <div class="line"></div>
                        <p>{{statictext('trainings', 'uptitle')}}</p>
                        <h2>{{statictext('trainings', 'header')}}</h2>
                    </div>
                    <h6>{{statictext('trainings','text')}}</h6>
                    <div class="text-md-left text-center">
                        <a href="{{route('trainings')}}" class="btn credit-btn mt-50">{{statictext('trainings', 'btn_text')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 row mx-0">
               @foreach($trainings as $training)
                   <div class="col-lg-4 col-12">
                       <div class="single-features-area wow fadeInUp" data-wow-delay="300ms">
                           <a href="{{route('training', $training)}}">
                               <img style="height: 200px; width: 100%" alt="{{$training->getTranslatedAttribute('name')}}" src="{{image($training->image)}}">
                               <h5>{{$training->getTranslatedAttribute('name')}}</h5>
                           </a>
                       </div>
                   </div>
               @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ##### Features Area End ###### -->
