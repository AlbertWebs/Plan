@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg"></div><!-- /.page-header__bg -->
    <div class="page-header-shape-1"></div><!-- /.page-header-shape-1 -->
    <div class="page-header-shape-2"></div><!-- /.page-header-shape-2 -->
    <div class="page-header-shape-3"></div><!-- /.page-header-shape-3 -->

    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>/</span></li>
                <li>About</li>
            </ul>
            <h2>About</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Start-->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about__img-box">
                    <div class="about-img">
                        <img src="{{asset('theme/assets/images/resources/about-img-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about__right">
                    <h2 class="about__title">We’re leading in the market</h2>
                    <div class="about__icon-box">
                        <div class="about__icon">
                            <span class="icon-data-analytics"></span>
                        </div>
                        <div class="about__icon-text">
                            <p>Dolor in reprehenderit in voluptate velit esse cillum dolore fugiat nulla
                                pariatur sed eiusmod tempor incidi dunt.</p>
                        </div>
                    </div>
                    <p class="about__right-text">There are many variations of passages of available but the
                        majority have suffered alteration in some form, by humou or randomised words which
                        don't look believable.</p>
                    <div class="listen__progress-wrap">
                        <div class="listen__progress">
                            <div class="listen__progress-box">
                                <div class="circle-progress"
                                    data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#f2f4f8","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                </div><!-- /.circle-progress -->
                                <span>90%</span>
                            </div>
                            <div class="listen__progress-content">
                                <h3>Affordable Cost</h3>
                            </div>
                        </div>
                        <div class="listen__progress">
                            <div class="listen__progress-box">
                                <div class="circle-progress"
                                    data-options='{ "value": 0.5,"thickness": 3,"emptyFill": "#f2f4f8","lineCap": "square", "size": 112, "fill": { "color": "#3c72fc" } }'>
                                </div><!-- /.circle-progress -->
                                <span>50%</span>
                            </div><!-- /.about-five__progress-box -->
                            <div class="listen__progress-content">
                                <h3>Quality of Work</h3>
                            </div>
                        </div>
                    </div>
                    <div class="about__phone-contact">
                        <div class="about__phone-contact-icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <div class="about__phone-contact-text">
                            <p>Have any question? Give us a call</p>
                            <a href="tel:+254 723 014 032">+254 723 014 032</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About End-->

<!--Brand Three-->
<section class="brand-three">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-3.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-4.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-5.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-3.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-4.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand-3-5.png')}}" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!--Brand Three End-->

<!--Testimonials One Start-->
<section class="testimonials-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="testimonials-one__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">What they are talking About</h2>
                        <span class="section-title__tagline">Trusted by more than 4,200 customers</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonials-one__right">
                    <div class="testimonials-one__carousel owl-theme owl-carousel">
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Sallie Sherman</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Sallie Simon</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-2.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Catherine Olson</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Emily Mendez</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-2.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Christian Nunez</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit
                                amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Donald Woods</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-2.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonials One End-->

<!--Counters One Start-->
<section class="counters-one counter-page">
    <div class="counters-one-bg" style="background-image: url({{asset('theme/assets/images/backgrounds/counter-one-bg.jpg')}})">
    </div>
    <div class="container">
        <ul class="counters-one__box list-unstyled">
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-video"></span>
                </div>
                <h3 class="odometer" data-count="420">00</h3>
                <p class="counter-one__text">Consulting solutions</p>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-help"></span>
                </div>
                <h3 class="odometer" data-count="880">00</h3>
                <p class="counter-one__text">Completed Casses</p>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-customer-review"></span>
                </div>
                <h3 class="odometer" data-count="990">00</h3>
                <p class="counter-one__text">Satisfied Customers</p>
            </li>
            <li class="counter-one__single">
                <div class="counter-one__icon">
                    <span class="icon-consultant"></span>
                </div>
                <h3 class="odometer" data-count="160">00</h3>
                <p class="counter-one__text">Expert Consultant</p>
            </li>
        </ul>
    </div>
</section>
<!--Counters One Start-->
<!--Team One Start-->
<section class="team-one">
    <div class="team-one__container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Meet the team</h2>
            <span class="section-title__tagline">People that bring you results</span>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('theme/assets/images/team/team-1-1.jpg')}}" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Marvin Butler</h3>
                            <p class="team-one__title">Consultant</p>
                        </div>
                        <div class="team-one__bottom">
                            <div class="team-one__btn-box">
                                <a href="contact.html" class="team-one__btn">Contact Me</a>
                            </div>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('theme/assets/images/team/team-1-2.jpg')}}" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Dominic Mills</h3>
                            <p class="team-one__title">Consultant</p>
                        </div>
                        <div class="team-one__bottom">
                            <div class="team-one__btn-box">
                                <a href="contact.html" class="team-one__btn">Contact Me</a>
                            </div>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('theme/assets/images/team/team-1-3.jpg')}}" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Clifford Zimmerman</h3>
                            <p class="team-one__title">Consultant</p>
                        </div>
                        <div class="team-one__bottom">
                            <div class="team-one__btn-box">
                                <a href="contact.html" class="team-one__btn">Contact Me</a>
                            </div>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms"
                data-wow-duration="1500ms">
                <!--Team One Single-->
                <div class="team-one__single">
                    <div class="team-one__img">
                        <img src="{{asset('theme/assets/images/team/team-1-4.jpg')}}" alt="">
                        <div class="team-one__hover-content">
                            <h3 class="team-one__name">Myra Montgomery</h3>
                            <p class="team-one__title">Consultant</p>
                        </div>
                        <div class="team-one__bottom">
                            <div class="team-one__btn-box">
                                <a href="contact.html" class="team-one__btn">Contact Me</a>
                            </div>
                            <div class="team-one__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Team One End-->

<!--CTA Two Start-->
<section class="cta-two">
    <div class="cta-two-bg" style="background-image: url({{asset('theme/assets/images/backgrounds/cta-two-bg.png')}})"></div>
    <div class="cta-two-bg-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-two__inner">
                    <h2 class="cta-two__title">meet our consultants</h2>
                    <p class="cta-two__text">We can help you stand out your business</p>
                    <ul class="list-unstyled cta-two__icon-box">
                        <li>
                            <a href="team.html">
                                <div class="cta-two__icon">
                                    <span class="icon-group"></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                <div class="cta-two__icon">
                                    <span class="icon-consulting-1"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA Two End-->
@endforeach
@endsection