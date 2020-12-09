 @php
     $footer_info = App\Models\setting::first();
     // logo
    $logo = App\Models\setting::select('logo')->first();
 @endphp
 <!-- Call To Section -->
 <section class="call-to-section">
    <div class="auto-container">
        <div class="inner clearfix">
            <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
            <h2>Ready To Discuss Your<br>Project?</h2>
            <div class="link-box">
                <a class="theme-btn btn-style-two" href="{{ route('contact.us') }}">
                    <i class="btn-curve"></i>
                    <span class="btn-title">GET FREE QUOTE</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img id="fLogo" src="{{ asset('public/Backend/assets/media/logo/'.$logo->logo) }}" alt="TOPUPSOFT" /></a>
                            </div>
                            <div class="text">{{ $footer_info->footer_about }}</div>
                            <ul class="social-links clearfix">
                                @isset($footer_info->facebook_url)
                                   <li>
                                    <a href="{{ $footer_info->facebook_url }}"><span class="fab fa-facebook-square"></span></a>
                                  </li>    
                                @endisset
                                @isset($footer_info->twitter_url)
                                <li><a href="{{ $footer_info->twitter_url }}"><span class="fab fa-twitter"></span></a></li> 
                                @endisset
                                @isset($footer_info->youtube_url)
                                <li><a href="{{ $footer_info->youtube_url }}"><span class="fab fa-youtube"></span></a></li>  
                                @endisset
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <h6>Explore</h6>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href="{{ route('about.us') }}">About</a></li>
                                        <li><a href="{{ route('portfolio') }}">Our Portfolio</a></li>
                                        <li><a href="{{ route('blog') }}">Latest News</a></li>
                                        <li><a href="{{ route('contact.us') }}">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('terms') }}">Terms of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <div class="widget-content">
                            <h6>Contact</h6>
                            <ul class="contact-info">
                                <li class="address"><span class="icon flaticon-pin-1"></span>{{ $footer_info->address }}</li>
                                <li><span class="icon fab fa-whatsapp-square"></span>
                                    <a target="__blank" href="https://api.whatsapp.com/send?phone=+8801827924326">{{ $footer_info->phone_number }}</a>
                                </li>
                                <li><span class="icon flaticon-email-2"></span>
                                    <a href="mailto:{{ $footer_info->email }}">{{ $footer_info->email }}</a>
                                </li>
                                <li><span class="icon fab fa-skype"></span>
                                    <a href="skype:arifmehrab11?chat">Skype</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <div class="widget-content">
                            <h6>Newsletter</h6>
                            <div class="newsletter-form">
                                <form method="POST" action="{{ route('newsletter.store') }}">
                                    @csrf
                                    <div class="form-group clearfix">
                                        <input type="email" name="email" value="" placeholder="Email Address"
                                            required="">
                                        <button type="submit" class="theme-btn"><span
                                                class="fa fa-envelope"></span></button>
                                    </div>
                                </form>
                            </div>
                            <div class="text">Sign up for our latest news & articles. We won’t give you spam
                                mails.</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="copyright">{{ $footer_info->copyright }}</div>
            </div>
        </div>
    </div>

</footer>