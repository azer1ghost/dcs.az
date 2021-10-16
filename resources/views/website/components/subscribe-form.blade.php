<!-- ##### Newsletter Area Start ###### -->
<section id="SUBSCRIBETOUS" class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url({{asset('assets/img/bg-img/6.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                    <h2>{{ statictext('subscribe', 'title') }}</h2>
                    <form id="subscribeForm">
                        @csrf
                        <input type="hidden" name="locale" value="{{ app()->getLocale() }}">
                        <input required type="email" name="email"  placeholder="{{ statictext('global', 'email') }}">
                        <button type="submit">{{ statictext('global', 'subscribe') }}</button>
                    </form>
                    <p>{{ statictext('subscribe', 'description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->

