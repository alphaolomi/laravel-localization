<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="main-footer-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <a href="#"><img src="{{asset('img/core-img/logo2.png')}}" alt=""></a>
                        </div>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in
                            euismod erat. Ut at erat et arcu pulvinar cursus a eget.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>{{ __('Usefull Links') }}</h6>
                        </div>
                        <nav>
                            <ul class="useful-links">
                                <li><a href="#">{{ __('Home') }}</a></li>
                                <li><a href="#">{{ __('Services &amp; Features') }}</a></li>
{{--                                <li><a href="#">{{ __('Accordions and tabs') }}</a></li>--}}
                                <li><a href="#">{{ __('Menu ideas') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>{{ __('Gallery') }}</h6>
                        </div>
                        <div class="gallery-list d-flex justify-content-between flex-wrap">
                            <a href="{{ asset('img/bg-img/gallery1.jpg')}}" class="gallery-img" title="Gallery Image 1"><img src="{{asset('img/bg-img/gallery1.jpg')}}" alt=""></a>
                            <a href="{{ asset('img/bg-img/gallery2.jpg')}}" class="gallery-img" title="Gallery Image 2"><img src="{{asset('img/bg-img/gallery2.jpg')}}" alt=""></a>
                            <a href="{{ asset('img/bg-img/gallery3.jpg')}}" class="gallery-img" title="Gallery Image 3"><img src="{{asset('img/bg-img/gallery3.jpg')}}" alt=""></a>
                            <a href="{{ asset('img/bg-img/gallery4.jpg')}}" class="gallery-img" title="Gallery Image 4"><img src="{{asset('img/bg-img/gallery4.jpg')}}" alt=""></a>
                            <a href="{{ asset('img/bg-img/gallery5.jpg')}}" class="gallery-img" title="Gallery Image 5"><img src="{{asset('img/bg-img/gallery5.jpg')}}" alt=""></a>
                            <a href="{{ asset('img/bg-img/gallery6.jpg')}}" class="gallery-img" title="Gallery Image 6"><img src="{{asset('img/bg-img/gallery6.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-100">
                        <div class="widget-title">
                            <h6>{{  __('Contact') }}</h6>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-placeholder"></i>
                            <p>Plot 4127/5B-C Mislane Road, Dar es salaam, Tanzania</p>
                        </div>
                        <div class="single-contact d-flex mb-30">
                            <i class="icon-telephone-1"></i>
                            <p>{{ __('Office')}}: 203-808-8648</p>
                        </div>
                        <div class="single-contact d-flex">
                            <i class="icon-contract"></i>
                            <p>{{ __('Email')}}: office@academy.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>
                        Copyright &copy; {{ date('Y') }} {{ __('All rights reserved') }}
                         | {{ __('This site is made with') }} <i class="fa fa-heart-o" aria-hidden="true"></i> {{ __('by') }} <a href="https://emanate.co.tz" target="_blank">Emanate Co</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->
