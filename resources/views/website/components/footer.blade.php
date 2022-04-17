<footer class="footer-area section-padding-100-0">

    <div style="background-color: #6351ce;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">{{ statictext('footer','social.networks') }}</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    @foreach($socials as $social)
                        <a href="{{$social->link}} ">
                            <i class="fab fa-2x fa-{{$social->name}} white-text mr-4"> </i>
                        </a>
                    @endforeach

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center  text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">{{setting('site.company_name')}}</h5>
                    <!-- Nav -->
                   <p>
                       {{$meta->get('meta_description')}}
                   </p>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">{{statictext('footer','services')}}</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            @foreach($services as $service)
                            <li><a href="{{route('services')}}">{{$service->getTranslatedAttribute('title')}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">{{statictext('footer','usefull')}}</h5>
                    <!-- Nav -->
                    <nav>
                        <ul>
                            @foreach(menu('site', '_json') as $menu)
                            <li><a href="{{$menu->link()}}">{{$menu->getTranslatedAttribute('title')}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>


            <!-- Single Footer Widget -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-footer-widget mb-100">
                    <h5 class="widget-title">{{statictext('footer','contact')}}</h5>
                    <!-- Nav -->
                    <nav>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><i class="fa fa-home mr-3"></i> {{setting('site.adress')}}</p>
                        <p><i class="fa fa-envelope mr-3"></i> {{setting('site.email')}}</p>
                        <p><i class="fa fa-phone mr-3"></i> {{setting('site.number')}}</p>
                        <p><i class="fa fa-phone-square mr-3"></i> {{setting('site.phone')}}</p>
                    </nav>
                </div>
            </div>


        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="copywrite-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                        <!-- Footer Logo -->
                        <a href="{{route('homepage')}}" class="footer-logo"><img style="max-width: 120px" src="{{ asset("storage")."/".setting('site.footer.logo') }}" alt=""></a>

                        <!-- Copywrite Text -->
                        <p class="copywrite-text">
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart-o" aria-hidden="true"></i> by
                            <a href="https://redactiveapps.com" target="_blank">Redactive Apps</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
