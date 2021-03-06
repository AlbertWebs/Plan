@extends('front.master')
@section('content')
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
    },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">


            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{asset('theme/assets/images/backgrounds/main-slider-1-1.jpg')}});">
                </div>
                <!-- <div class="image-layer-overlay"></div> -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="main-slider-shape-4"></div>
                <div class="main-slider-shape-5"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>welcome to Plan & Foccus consultancy</p>
                                <h2>consulting <br> for every <br> business</h2>
                                <a href="{{url('/about-us')}}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url({{asset('theme/assets/images/backgrounds/main-slider-1-2.jpg')}});">
                </div>
                <!-- <div class="image-layer-overlay"></div> -->
                <div class="main-slider-shape-1"></div>
                <div class="main-slider-shape-2"></div>
                <div class="main-slider-shape-3"></div>
                <div class="main-slider-shape-4"></div>
                <div class="main-slider-shape-5"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="main-slider__content">
                                <p>welcome to Plan & Focus Consultants Limited consultancy</p>
                                <h2>consulting <br> for every <br> business</h2>
                                <a href="{{url('/about-us')}}" class="thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><span
                    class="main-slider__next-text">Next</span><i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><span
                    class="main-slider__prev-text">Prev</span><i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

<!--Real World Start-->
<section class="real-world">
    <div class="real-world-shape wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms"
        style="background-image: url({{asset('theme/assets/images/shapes/real-world-shape.png')}})"></div>
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">real-world experience</h2>
            <span class="section-title__tagline">The best business consulting firm you can count on!</span>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--Real World Single-->
                <div class="real-world__single">
                    <h2 class="real-world__title"><a href="#">wealth <br> Management</a>
                    </h2>
                    <a href="#" class="real-world__btn">Read More</a>
                    <div class="real-world__icon-box">
                        <span class="icon-wealth"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <!--Real World Single-->
                <div class="real-world__single">
                    <h2 class="real-world__title"><a href="#">audit <br> marketing</a></h2>
                    <a href="#" class="real-world__btn">Read More</a>
                    <div class="real-world__icon-box">
                        <span class="icon-data-analytics"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!--Real World Single-->
                <div class="real-world__single">
                    <h2 class="real-world__title"><a href="#">Finance <br> consulting</a>
                    </h2>
                    <a href="#" class="real-world__btn">Read More</a>
                    <div class="real-world__icon-box">
                        <span class="icon-report"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Real World Start-->

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <h4 class="brand-one__title">Meet the partners</h4>
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
                    <img src="{{asset('theme/assets/images/brand/brand--1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-3.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-4.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-5.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-1.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-2.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-3.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-4.png')}}" alt="">
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <img src="{{asset('theme/assets/images/brand/brand--1-5.png')}}" alt="">
                </div><!-- /.swiper-slide -->
            </div>
        </div>
    </div>
</section>
<!--Brand One End-->

<!--Welcome One Start-->
<section class="welcome-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__left">
                    <div class="welcome-one__img-box">
                        <div class="welcome-one__img-1">
                            <img src="{{asset('theme/assets/images/resources/welcome-1-img-1.jpg')}}" alt="">
                        </div>
                        <div class="welcome-one__img-2">
                            <img src="{{asset('theme/assets/images/resources/welcome-1-img-2.jpg')}}" alt="">
                        </div>
                        <a href="https://www.youtube.com/watch?v=2Gg6Seob5Mg"
                            class="welcome-one__video-btn video-popup">
                            <div class="welcome-one__video-btn-icon">
                                <i class="fa fa-play"></i>
                                <span class="ripple"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome-one__right">
                    <h2 class="welcome-one__title">We???re leading in the market</h2>
                    <p class="welcome-one__text">Lorem ipsum is simply free text dolor sit amet, consectetur
                        notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua lonm andhn.</p>
                    <p class="welcome-one__text-two">We have 35+ years of experience. We offer marketing and
                        consulting services</p>
                    <div class="welcome-one__progress">
                        <div class="welcome-one__progress-single">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="88%">
                                    <div class="count-text">88%</div>
                                </div>
                            </div>
                            <h4 class="welcome-one__progress-title">Consulting</h4>
                        </div>
                        <div class="welcome-one__progress-single">
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="68%">
                                    <div class="count-text">68%</div>
                                </div>
                            </div>
                            <h4 class="welcome-one__progress-title">Advices</h4>
                        </div>
                    </div>
                    <div class="welcome-one__call">
                        <div class="welcome-one__call-icon">
                            <span class="icon-phone-ringing"></span>
                        </div>
                        <div class="welcome-one__call-text">
                            <p>Have any question? Give us a call</p>
                            <a href="tel:+92-666-888-0000">+254723014032</a>
                        </div>
                    </div>
                    <div class="welcome-one__big-text">Plan </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Welcome One End-->

<!--Two Boxes Start-->
<section class="two-boxes">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="two-boxes__single">
                    <div class="two-boxes__single-content">
                        <div class="two-boxes__count">
                            <span></span>
                        </div>
                        <div class="two-boxes__content">
                            <h3 class="two-boxes__title">Get professional advice</h3>
                            <p class="two-boxes__text">There are many variations of available but the majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="two-boxes__single">
                    <div class="two-boxes__single-content">
                        <div class="two-boxes__count">
                            <span></span>
                        </div>
                        <div class="two-boxes__content">
                            <h3 class="two-boxes__title">trusted & professional</h3>
                            <p class="two-boxes__text">There are many variations of available but the majority
                                have suffered alteration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Two Boxes End-->

<!--Cases One Start-->
<section class="cases-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Case Studies</h2>
            <span class="section-title__tagline">We help our clients renew their business</span>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--Cases One Single-->
                <div class="cases-one__single">
                    <div class="cases-one__img-box">
                        <div class="cases-one__img">
                            <img src="{{asset('theme/assets/images/resources/cases-1-img-1.jpg')}}" alt="">
                        </div>
                        <div class="cases-one__content">
                            <div class="cases-one__icon">
                                <span class="icon-mobile-analytics"></span>
                            </div>
                            <p class="cases-one__tagline">Thought leadership</p>
                            <h2 class="cases-one__tilte"><a href="#">businesses growth</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <!--Cases One Single-->
                <div class="cases-one__single">
                    <div class="cases-one__img-box">
                        <div class="cases-one__img">
                            <img src="{{asset('theme/assets/images/resources/cases-1-img-2.jpg')}}" alt="">
                        </div>
                        <div class="cases-one__content">
                            <div class="cases-one__icon">
                                <span class="icon-research"></span>
                            </div>
                            <p class="cases-one__tagline">Risk management</p>
                            <h2 class="cases-one__tilte"><a href="#">Marketing advice</a></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!--Cases One Single-->
                <div class="cases-one__single">
                    <div class="cases-one__img-box">
                        <div class="cases-one__img">
                            <img src="{{asset('theme/assets/images/resources/cases-1-img-3.jpg')}}" alt="">
                        </div>
                        <div class="cases-one__content">
                            <div class="cases-one__icon">
                                <span class="icon-creative"></span>
                            </div>
                            <p class="cases-one__tagline">Business strategy</p>
                            <h2 class="cases-one__tilte"><a href="#">finance consulting</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Cases One End-->

<!--Our Mission Start-->
<section class="our-mission">
    <div class="our-mission-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{asset('theme/assets/images/backgrounds/our-mission-bg.jpg')}})"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="our-mission__inner">
                    <h2 class="our-mission__title">Mission is to Protect <br> your Businesses & <br> Much More
                    </h2>
                    <a href="{{url('/')}}/about-us" class="thm-btn our-mission__btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Our Mission End-->

<!--Faq One Start-->
<section class="faq-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Question Answers</h2>
            <span class="section-title__tagline">If you have any more questions, Contact us</span>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="faq-one__left">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4><span>.</span> think ahead and boost your business?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages the majority have suffered
                                        alteration in some fo injected humour, or randomised words believable.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4><span>.</span> How consultancy experts work?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages the majority have suffered
                                        alteration in some fo injected humour, or randomised words believable.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4><span>.</span> what is the best advice for growth?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages the majority have suffered
                                        alteration in some fo injected humour, or randomised words believable.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4><span>.</span> How to improve your business?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>There are many variations of passages the majority have suffered
                                        alteration in some fo injected humour, or randomised words believable.
                                    </p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-one__right">
                    <div class="faq-one__img">
                        <img src="{{asset('theme/assets/images/resources/faq-one-img-1.jpg')}}" alt="">
                    </div>
                    <div class="faq-one__bottom">
                        <div class="faq-one__list-box">
                            <ul class="list-unstyled faq-one__list">
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Nsectetur cing elit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Suspe ndisse suscipit sagittis leo.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Entum estibulum dignissim posuere.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>If you are going to use a passage.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-tick"></span>
                                    </div>
                                    <div class="text">
                                        <p>Lorem Ipsum on the tend to repeat.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="faq-one__experience-box">
                            <h2>30</h2>
                            <p>Years of <br> Expeirence</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Faq One End-->

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
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Todd Higgins</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Gordon King</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-2.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Paul Alvarez</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Hester Ortiz</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-2.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Randall Fleming</h5>
                                <p class="testimonials-one__client-title">Customer</p>
                            </div>
                            <div class="testimonials-one__client-img">
                                <img src="{{asset('theme/assets/images/testimonial/testimonials-1-1.png')}}" alt="">
                            </div>
                            <div class="testimonials-one__quote"></div>
                        </div>
                        <!--Testimonials One Single-->
                        <div class="testimonials-one__single">
                            <p class="testimonials-one__text">Lorem ipsum is simply free text dolor sit amet,
                                consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua.</p>
                            <div class="testimonials-one__client-info">
                                <h5 class="testimonials-one__client-name">Benjamin Hansen</h5>
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
<section class="counters-one">
    <div class="counters-one-bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg)">
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

<!--Financial Advice Start-->
<section class="financial-advice">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="financial-advice__box tabs-box">
                    <ul class="tab-btns tab-buttons clearfix list-unstyled">
                        <li data-tab="#business" class="tab-btn"><span>Business Growth</span></li>
                        <li data-tab="#financial" class="tab-btn active-btn"><span>Financial Advice</span></li>
                        <li data-tab="#gobal" class="tab-btn"><span>Gobal Solutions</span></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab " id="business">
                            <div class="financial-advice__content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1">
                                            <ul class="list-unstyled financial-advice__list-box">
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">Highest
                                                            Success Rates</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">We build
                                                            experience</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-2">
                                            <p class="financial-advice_-desc">There are many variations of
                                                passages of lorem ipsum available, but the majority have
                                                suffered alteration in some form injected humour or randomised
                                                words which don't look believable.</p>
                                            <ul class="list-unstyled financial-advice__list-box-2">
                                                <li>If you are going to use a passage</li>
                                                <li>Lorem Ipsum you need to be sure</li>
                                                <li>There isn't anything embarrassing</li>
                                                <li> Hidden in the middle of text</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-3">
                                            <div class="financial-advice__img">
                                                <img src="{{asset('theme/assets/images/resources/financial-advice-img-1.jpg')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab active-tab" id="financial">
                            <div class="financial-advice__content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1">
                                            <ul class="list-unstyled financial-advice__list-box">
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">Highest
                                                            Success Rates</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">We build
                                                            experience</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-2">
                                            <p class="financial-advice_-desc">There are many variations of
                                                passages of lorem ipsum available, but the majority have
                                                suffered alteration in some form injected humour or randomised
                                                words which don't look believable.</p>
                                            <ul class="list-unstyled financial-advice__list-box-2">
                                                <li>If you are going to use a passage</li>
                                                <li>Lorem Ipsum you need to be sure</li>
                                                <li>There isn't anything embarrassing</li>
                                                <li> Hidden in the middle of text</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-3">
                                            <div class="financial-advice__img">
                                                <img src="{{asset('theme/assets/images/resources/financial-advice-img-1.jpg')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab" id="gobal">
                            <div class="financial-advice__content">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1">
                                            <ul class="list-unstyled financial-advice__list-box">
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">Highest
                                                            Success Rates</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="financial-advice__icon">
                                                        <span class="icon-checkmark"></span>
                                                    </div>
                                                    <div class="financial-advice__list-box-content">
                                                        <h3 class="finalcial-advice__list-box-title">We build
                                                            experience</h3>
                                                        <p class="finalcial-advice__list-box-text">Lorem Ipsum
                                                            nibh vel velit auctor aliqu. Aenean sollic tudin,
                                                            lorem is simply free text quis bibendum.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-2">
                                            <p class="financial-advice_-desc">There are many variations of
                                                passages of lorem ipsum available, but the majority have
                                                suffered alteration in some form injected humour or randomised
                                                words which don't look believable.</p>
                                            <ul class="list-unstyled financial-advice__list-box-2">
                                                <li>If you are going to use a passage</li>
                                                <li>Lorem Ipsum you need to be sure</li>
                                                <li>There isn't anything embarrassing</li>
                                                <li> Hidden in the middle of text</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <div class="financial-advice__single-1 financial-advice__single-3">
                                            <div class="financial-advice__img">
                                                <img src="{{asset('theme/assets/images/resources/financial-advice-img-1.jpg')}}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Financial Advice End-->

<!--Google Map Start-->
<section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1630767329878!5m2!1sen!2ske"
        class="google-map__one" allowfullscreen></iframe>

</section>
<!--Google Map End-->

<!--News One Start-->
<section class="news-one">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">What???s Happening</h2>
            <span class="section-title__tagline">Checkout what we have been doing</span>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{asset('theme/assets/images/blog/news-1-1.jpg')}}" alt="">
                        <a href="#">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> by Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title">
                            <a href="#">Metrics mission skills.</a>
                        </h3>
                        <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                            turpis gilla sed sit amet.</p>
                        <a href="#" class="news-one__btn">Read More</a>
                        <div class="news-one__date-box">
                            <p>26 mar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{asset('theme/assets/images/blog/news-1-2.jpg')}}" alt="">
                        <a href="#">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> by Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title">
                            <a href="#">solutions total link parallel</a>
                        </h3>
                        <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                            turpis gilla sed sit amet.</p>
                        <a href="#" class="news-one__btn">Read More</a>
                        <div class="news-one__date-box">
                            <p>26 mar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!--News One Single-->
                <div class="news-one__single">
                    <div class="news-one__img">
                        <img src="{{asset('theme/assets/images/blog/news-1-3.jpg')}}" alt="">
                        <a href="#">
                            <span class="news-one__plus"></span>
                        </a>
                    </div>
                    <div class="news-one__content">
                        <ul class="list-unstyled news-one__meta">
                            <li><a href="#"><i class="far fa-user-circle"></i> by Admin</a></li>
                            <li><span>/</span></li>
                            <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>
                            </li>
                        </ul>
                        <h3 class="news-one__title">
                            <a href="#">business advice for growth</a>
                        </h3>
                        <p class="news-one__text">Aellentesque porttitor lacus quis enim varius sed efficitur
                            turpis gilla sed sit amet.</p>
                        <a href="#" class="news-one__btn">Read More</a>
                        <div class="news-one__date-box">
                            <p>26 mar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--News One End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one-bg" style="background-image: url(assets/images/backgrounds/cta-one-bg.png)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h2 class="cta-one__title">we???re delivering the best <br> customer experience</h2>
                    </div>
                    <div class="cta-one__right">
                        <a href="{{url('/')}}/contact-us" class="thm-btn cta-one__btn">let???s get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

@endforeach
@endsection