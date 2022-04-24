<section class="miscellaneous-area bg-gray mt-5">
    <div class="container">
        <div class="col-12">
            <div class="elements-title mb-30">
                <div class="line"></div>
                <h2>{{statictext('informations', 'header')}}</h2>
            </div>
        </div>
        <div class="col-12">
            <div class="credit-cool-facts-area">
                <div class="row">
                    @foreach($counters as $counter)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <!-- Single Cool Facts -->
                            <div class="single-cool-fact d-flex align-items-center justify-content-md-start justify-content-center mb-100">
                                <div class="scf-icon mr-15">
                                    <i class="{{$counter->getAttribute('icon')}}"></i>
                                </div>
                                <div class="scf-text">
                                    <h2><span class="counter" data-count="{{$counter->getAttribute('value')}}">0</span></h2>
                                    <p>{{$counter->getTranslatedAttribute('text')}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
