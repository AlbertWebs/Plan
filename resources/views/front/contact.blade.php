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
                <li>Contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Message Box Start-->
<section class="message-box">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="message-box__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title">get in touch with our team</h2>
                        <span class="section-title__tagline">Trusted by more than 4,200 customers</span>
                    </div>
                    <div class="message-box__social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="clr-fb"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="clr-ins"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="message-box__right">
                    <form action="http://layerdrops.com/aivons/assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                    <div class="comment-form__icon">
                                        <i class="far fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                    <div class="comment-form__icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                    <div class="comment-form__icon contact-expert__icon-comment">
                                        <i class="far fa-comment"></i>
                                    </div>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Message Box End-->

<!--Locations Start-->
<section class="locations">
    <div class="container">
        <div class="location__inner">
            <div class="section-title text-center">
                <h2 class="section-title__title">offices near you</h2>
                <span class="section-title__tagline">Come and visit our office to find solutions</span>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0ms"
                    data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Nairobi</h3>
                        <p class="locations__text">22 Tom Mboya Street</p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:info@planandfocus.com " class="locations__mail">info@planandfocus.com </a>
                            <a href="tel:888-999-0000" class="locations__phone">+254723014032</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms"
                    data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Mombasa</h3>
                        <p class="locations__text">Mwembe Tayari</p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:info@planandfocus.com " class="locations__mail">info@planandfocus.com </a>
                            <a href="tel:888-999-0000" class="locations__phone">+254723014032</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms"
                    data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Nakuru</h3>
                        <p class="locations__text">Free Area, Nakuru</p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:info@planandfocus.com " class="locations__mail">info@planandfocus.com </a>
                            <a href="tel:888-999-0000" class="locations__phone">+254723014032</a>
                        </h4>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms"
                    data-wow-duration="1500ms">
                    <!--Locations Single-->
                    <div class="locations__single">
                        <h3 class="locations__title">Kisumu</h3>
                        <p class="locations__text">Kondele</p>
                        <h4 class="locations__mail-phone-box">
                            <a href="mailto:info@planandfocus.com " class="locations__mail">info@planandfocus.com </a>
                            <a href="tel:888-999-0000" class="locations__phone">+254723014032</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Locations End-->

<!--Contact Page Google Map Start-->
<section class="google-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1630767329878!5m2!1sen!2ske"
        class="google-map__one" allowfullscreen></iframe>

</section>
<!--Contact Page Google Map End-->
@endforeach
@endsection