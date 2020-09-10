<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 d-flex justify-content-between">
                    <!-- Logo Area -->
                    <div class="logo">
                        <a href="{{route('Homepage')}}"><img style="max-width: 120px" src="{{ asset("storage")."/".setting('site.logo') }}" alt="Logo"></a>
                    </div>

                    <!-- Top Contact Info -->
                    <div class="top-contact-info d-flex align-items-center">

                        @if(setting('site.googlemap'))
                            <a target="_blank" href="{{setting('site.googlemap')}}" >
                                <img src="{{asset("assets/img/core-img/placeholder.png")}}" alt="">
                                <span>{{setting('site.adress')}}</span>
                            </a>
                        @endif

                        @if(setting('site.email'))
                            <a href="mailto:{{setting('site.email')}}" >
                                <img src="{{asset("assets/img/core-img/message.png")}}" alt="">
                                <span>{{setting('site.email')}}</span>
                            </a>
                        @endif

                    </div>

                    <!-- Select your language -->
                    <div class="top-contact-lang d-flex align-items-center">
                            <a href="javascript:void(0)" data-toggle="tooltip" data-placement="bottom" title="{{ $currentLanguage->name }}"><span class="active-lang">{{ $currentLanguage->locale }}</span></a>
                        @foreach ($altLocalizedUrls as $alt)
                            <a href="{{ $alt['url'] }}" data-toggle="tooltip" data-placement="bottom" title="{{ $alt['name'] }}"><span>{{ $alt['locale'] }}</span></a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="credit-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="creditNav">

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            {!! menu('site', 'frontend.static.menu') !!}
                        </div>
                        <!-- Nav End -->
                    </div>

                    <!-- Contact -->
                    <div class="contact">
                        <a href="tel:{{preg_replace('/\s+/', '', setting('site.number'))}}">
                            <img src="{{asset("assets/img/core-img/call2.png")}}" alt="">
                            {{setting('site.number')}}
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
