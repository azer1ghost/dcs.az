<!-- Footer -->
<style>

</style>
<footer class="footer-area">

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

                @foreach(socials() as $social)
                    <a href="{{$social['link']}} ">
                        <i class="{{$social['icon']}} white-text mr-4"> </i>
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

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 style="color: #c4c4c4;" class="text-uppercase font-weight-bold">{{setting('site.company_name')}}</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>{{setting('site.description')}}</p>

            </div>
            <!-- Grid column -->
            <!-- statictext('footer','social.networks') -->
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 style="color: #c4c4c4;" class="text-uppercase font-weight-bold">{{statictext('footer','services')}}</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">


                <?php $i = 0 ?>
                @foreach($services as $service)
                   <?php $i++ ?>
                        <p>
                            <a style="color: #838383; font-size: 14px" href="{{$service['link']}}">{{$service['title']}}</a>
                        </p>
                    @if($i == 4)
                        @break
                    @endif
                @endforeach

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 style="color: #c4c4c4;" class="text-uppercase font-weight-bold">{{statictext('footer','usefull')}}</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">

                @foreach(useful_links() as $USE_link)
                    <p>
                        <a style="color: #838383; font-size: 14px" href="{{$USE_link['url']}}">{{$USE_link['title']}}</a>
                    </p>
                @endforeach

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 style="color: #c4c4c4;" class="text-uppercase font-weight-bold">{{statictext('footer','contact')}}</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home mr-3"></i> {{setting('site.adress')}}</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> {{setting('site.email')}}</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> {{setting('site.number')}}</p>
                <p>
                    <i class="fa fa-phone-square mr-3"></i> {{setting('site.phone')}}</p>

            </div>
            <!-- Grid column -->

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
                        <a href="{{route('Homepage')}}" class="footer-logo"><img src="{{ asset("storage")."/".setting('site.logo') }}" alt=""></a>

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