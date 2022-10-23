<div class="credit-main-menu" id="sticker" style="background-color: #f1f7f9">
    <div class="classy-nav-container breakpoint-off">
        <div class="container">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="creditNav" style="height: 90px !important;">

                <div class="logo">
                    <a href="{{route('homepage')}}"><img style="max-width: 120px" src="{{ asset("storage")."/".setting('site.logo') }}" alt="Logo"></a>
                </div>

                <!-- Menu -->
                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="classynav">
                        {!! menu('site', 'website.components.menu') !!}
                        <!-- Select your language -->
                        <div class="d-flex align-items-center ml-3">
                            @if (Route::has('login'))
                                @auth('student')
                                    <div class="dropdown">
                                        <a id="profileDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                            <i class="far fa-user mr-1"></i> {{ auth('student')->user()->getAttribute('fullname') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" style="min-width: 70px !important;">
                                            <a class="dropdown-item" href="{{route('profile')}}">
                                                <i class="far fa-cog mr-1"></i>
                                                {{statictext('global', 'profile')}}
                                            </a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button class="dropdown-item" type="submit">
                                                    <i class="far fa-sign-out mr-1"></i>
                                                    {{statictext('global', 'logout')}}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <a class="mr-2" href="{{route('login')}}">{{statictext('global','login')}}</a>
                                @endauth
                            @endif
                            <div class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="flag-icon flag-icon-{{(session()->get('locale') ?? 'en') == 'en' ? 'gb' : session()->get('locale')}}"></span> {{ucfirst(session()->get('locale') ?? 'en')}}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="min-width: 70px !important;">
                                    @foreach(config('app.locales') as $language)
                                        <a class="dropdown-item" href="{{route('locale', $language)}}"><span class="flag-icon flag-icon-{{$language == 'en' ? 'gb' : $language}}"></span> {{ucfirst($language)}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

            </nav>
        </div>
    </div>
</div>
