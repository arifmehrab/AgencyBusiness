        @php
            $route  = Route::current()->getName();
            $services = App\Models\service::select('service_title', 'service_slug')->orderBy('id', 'ASC')->get();
            // logo
            $logo = App\Models\setting::select('logo')->first();
        @endphp
        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{ url('/') }}" title="TOPUPSOFT Digital service Agency"><img
                                    src="{{ asset('public/Backend/assets/media/logo/'.$logo->logo) }}" id="thm-logo" alt="TOPUPSOFT"
                                    title="Linoor - DIgital Agency HTML Template"></a></div>
                    </div>
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                                class="txt">Menu</span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ ($route == 'index')? 'current': '' }}"><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li class="{{ ($route == 'about.us')? 'current': '' }}"><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            @foreach($services as $row)
                                            <li>
                                                <a href="{{ route('single.service', $row->service_slug) }}">
                                                    {{ $row->service_title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ ($route == 'portfolio')? 'current': '' }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                    <li class="{{ ($route == 'blog')? 'current': '' }}"><a href="{{ route('blog') }}">Blog</a></li>
                                    <li class="{{ ($route == 'contact.us')? 'current': '' }}"><a href="{{ route('contact.us') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">

                        <div class="link-box">
                            <div class="call-us">
                                <a target="__blank" class="link" href="https://api.whatsapp.com/send?phone=+8801827924326">
                                    <span class="icon"></span>
                                    <span class="sub-text">Whatsapp Anytime</span>
                                    <span class="number">01827924326</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->

        </header>
        <!-- End Main Header -->

        <!--Mobile Menu-->
        <div class="side-menu__block">


            <div class="side-menu__block-overlay custom-cursor__overlay">
                <div class="cursor"></div>
                <div class="cursor-follower"></div>
            </div><!-- /.side-menu__block-overlay -->
            <div class="side-menu__block-inner ">
                <div class="side-menu__top justify-content-end">

                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ asset('public/Frontend') }}/images/icons/close-1-1.png"
                            alt=""></a>
                </div><!-- /.side-menu__top -->


                <nav class="mobile-nav__container">
                    <!-- content is loading via js -->
                </nav>
                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
                <div class="side-menu__content">
                    <p>
                        <a href="mailto:topupsoft@gmail.com">topupsoft@gmail.com</a>
                         <br> 
                        <a href="https://api.whatsapp.com/send?phone=+8801827924326">8801827924326</a>
                    </p>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->