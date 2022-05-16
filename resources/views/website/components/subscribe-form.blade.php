<!-- ##### Newsletter Area Start ###### -->
<section id="subscribeArea" class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url({{asset('assets/img/bg-img/6.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                    <h2>{{ statictext('subscribe', 'title') }}</h2>
                    <form id="subscribeForm" action="{{route('subscribe')}}" method="POST">
                        @csrf
                        <input type="hidden" name="lang" value="{{ app()->getLocale() }}">
                        <input type="hidden" name="token" value="{{ Str::random(32) }}">
                        <input required type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="{{ statictext('global', 'email') }}">
                        @error('email')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                        @enderror
                        <button type="submit">{{ statictext('global', 'subscribe') }}</button>
                    </form>
                    <p>{{ statictext('subscribe', 'description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->

