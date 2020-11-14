        <!-- Main Header -->
        <header class="main-header header-style-one">

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="inner-container clearfix">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html" title="Linoor - DIgital Agency HTML Template"><img
                                    src="{{ asset('public/Frontend') }}/images/logo.png" id="thm-logo" alt="Linoor - DIgital Agency HTML Template"
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
                                    <li class="current"><a href="{{ route('index') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('about.us') }}">About Us</a></li>
                                    <li class="dropdown"><a href="services.html">Services</a>
                                        <ul>
                                            <li><a href="web-development.html">Website Development</a></li>
                                            <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                            <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                            <li><a href="seo.html">SEO & Content Writting</a></li>
                                            <li><a href="app-development.html">App Development</a></li>
                                            <li><a href="ui-designing.html">UI/UX Designing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact.us') }}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">

                        <div class="link-box">
                            <div class="call-us">
                                <a class="link" href="tel:6668880000">
                                    <span class="icon"></span>
                                    <span class="sub-text">Call Anytime</span>
                                    <span class="number">666 888 0000</span>
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
                    <p><a href="mailto:needhelp@linoor.com">needhelp@linoor.com</a> <br> <a href="tel:888-999-0000">888
                            999 0000</a></p>
                    <div class="side-menu__social">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div><!-- /.side-menu__content -->
            </div><!-- /.side-menu__block-inner -->
        </div><!-- /.side-menu__block -->