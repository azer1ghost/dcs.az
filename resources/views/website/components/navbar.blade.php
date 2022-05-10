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
                        {!! menu('site', 'website.components.menu') !!}
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
