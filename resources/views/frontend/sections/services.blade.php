<!-- ##### Services Area Start ###### -->
<section class="services-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
                    <div class="line"></div>
                    <p>{{statictext('homepage','services.uptitle')}}</p>
                    <h2>{{statictext('homepage','services.title')}}</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach(getServices(9) as $service)
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100 wow fadeInUp" data-wow-delay="200ms">
                        <div class="icon">
                            <i class="{{$service['icon']}}"></i>
                        </div>
                        <div class="text">
                            <h5>{{$service['title']}}</h5>
                            <p>{{$service['text']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ##### Services Area End ###### -->
