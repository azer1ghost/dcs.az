<!-- ##### Newsletter Area Start ###### -->
<section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url({{asset('assets/img/bg-img/6.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-lg-8">
                <div class="nl-content text-center">
                    <h2>{{ statictext('subscribe','title') }}</h2>
                    <form action="#" method="post">
                        <input type="email" name="nl-email" id="nlemail" placeholder="{{ statictext('global','email') }}">
                        <button type="submit">{{ statictext('global','subscribe') }}</button>
                    </form>
                    <p>{{ statictext('subscribe','description') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Newsletter Area End ###### -->