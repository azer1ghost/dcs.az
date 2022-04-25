<!-- ##### Services Area Start ###### -->
<section class="services-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading  mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <div class="line"></div>
                    <p>{{statictext('homepage', 'services.uptitle')}}</p>
                    <h2>{{statictext('homepage', 'services.title')}}</h2>
                </div>
            </div>
        </div>

        <div class="row">
        @foreach($services as $service)
            <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{route('services')}}" class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <i class="{{$service->getAttribute('icon')}}"></i>
                        </div>
                        <div class="text">
                            <h5>{{$service->getTranslatedAttribute('title')}}</h5>
                            <p>{!! Str::limit(strip_tags($service->getTranslatedAttribute('text'))) !!}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Services Area End ###### -->
