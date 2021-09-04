<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan and Foccus Consultancy Limited || P&F || HTML Template For Business</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('theme/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('theme/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('theme/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('theme/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Aivons HTML Template For Business Consulting" />

    <!-- fonts -->
    <link rel="preconnect" href="../../fonts.gstatic.com/{{url('/')}}">
    <link
        href="../../fonts.googleapis.com/css28439.css?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{asset('theme/assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/aivons-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/twentytwenty/twentytwenty.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/vendors/bxslider/css/jquery.bxslider.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/aivons.css')}}" />
    <link rel="stylesheet" href="{{asset('theme/assets/css/aivons-responsive.css')}}" />

    <!-- RTL Styles -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/aivons-rtl.css')}}">

    <!-- color css -->
    <link rel="stylesheet" id="jssDefault" href="{{asset('theme/assets/css/colors/color-default.css')}}">
    <link rel="stylesheet" id="jssMode" href="{{asset('theme/assets/css/modes/aivons-normal.css')}}">

    <!-- toolbar css -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/aivons-toolbar.css')}}">
</head>

<body>




    <div class="preloader">
        <div class="preloader__image"></div><!-- /.preloader__image -->
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="{{url('/')}}"><img width="300" src="{{asset('/')}}uploads/logo/logo-h.png" alt=""></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler">
                                <span class="mobile-nav__toggler-bar"></span>
                                <span class="mobile-nav__toggler-bar"></span>
                                <span class="mobile-nav__toggler-bar"></span>
                            </a>
                            <ul class="main-menu__list">
                                <li class="dropdown  ">
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li class="dropdown  ">
                                    <a href="{{url('/')}}/about-us">About Us</a>
                                </li>
                                <li class="dropdown  ">
                                    <a onclick="return alert('List of Services Goes Here')" href="#">Our Services</a>
                                </li>
                              
                                <li><a href="{{url('/')}}/contact-us">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__social-box">
                            <div class="main-menu-wrapper__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__search-box">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass1"></a>
                        </div>
                        <div class="main-menu-wrapper__phone-contact">
                            <p>Need help? Talk to an expert</p>
                            <a href="tel:+92-666-888-0000">+254 072 888 0000</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


        @yield('content')


        <!--Site Footer One Start-->
        <footer class="site-footer">
            <div class="site-footer-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="3500ms"
                style="background-image: url(assets/images/shapes/footer-shape.png)"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="{{url('/')}}"><img width="200" src="{{asset('/')}}uploads/logo/logo-v.png" alt=""></a>
                                </div>
                                {{-- <p class="footer-widget__text">Welcome to our consultancy agency. Some text could follow here</p> --}}
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="tel:+92-666-888-0000">+254 072 888 0000</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:info@designekta.com">info@designekta.com</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>66 Moi Avenue, Street New, Nairobi, kenya</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="footer-widget__explore-list list-unstyled">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Meet our team</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="#">Latest news</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                                <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-8 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title footer-widget__title-news">Newsletter</h3>
                                <form class="footer-widget__newsletter-form">
                                    <p class="footer-widget__newsletter-text">Subsrcibe for latest articles and
                                        resources</p>
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer-bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-bottom__inner">
                                <div class="site-footer-bottom__left">
                                    <p>© Copyright 2021  <a href="#">Plan and Foccus | All Rights Reserved</a></p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                    <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                    <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{url('/')}}" aria-label="logo image"><img src="{{asset('/')}}/uploads/logo/logo-h.png" width="155"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@aivons.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('theme/assets/vendors/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('theme/assets/vendors/bxslider/js/jquery.bxslider.min.js')}}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template js -->
    <script src="{{asset('theme/assets/js/aivons.js')}}"></script>

    <!-- color switcher language -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/lang.js')}}"></script>
    <script src="../../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
    <script src="{{asset('theme/assets/js/color-switcher.js')}}"></script>

</body>


</html>

@endforeach
