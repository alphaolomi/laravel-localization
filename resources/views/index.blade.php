@extends('layouts.base')

@section('title', 'Home')

@section('content')
  <!-- ##### Hero Area Start ##### -->
  <section class="hero-area">
    <div class="hero-slides owl-carousel">

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url({{ asset('img/bg-img/bg-1.jpg') }});">
        <div class="h-100 container">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="hero-slides-content">
                <h4 data-animation="fadeInUp" data-delay="100ms">{{ __('Welcome') }}</h4>
                <h2 data-animation="fadeInUp" data-delay="400ms">
                  {!! __('Welcome to our <br>Online University') !!}</h2>
                <a href="#" class="btn academy-btn" data-animation="fadeInUp"
                  data-delay="700ms">{{ __('Read
                                                  More') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Single Hero Slide -->
      <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="h-100 container">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <div class="hero-slides-content">
                <h4 data-animation="fadeInUp" data-delay="100ms">{{ __('Welcome') }}</h4>
                <h2 data-animation="fadeInUp" data-delay="400ms">
                  <h2 data-animation="fadeInUp" data-delay="400ms">
                    {!! __('Welcome to our <br>Online University') !!}</h2>
                  <a href="#" class="btn academy-btn" data-animation="fadeInUp"
                    data-delay="700ms">{{ __('Read
                                                    More') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Hero Area End ##### -->

  <!-- ##### Top Feature Area Start ##### -->
  <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="features-content">
            <div class="row no-gutters">
              <!-- Single Top Features -->
              <div class="col-12 col-md-4">
                <div class="single-top-features d-flex align-items-center justify-content-center">
                  <i class="icon-agenda-1"></i>
                  <h5>{{ __('Online Courses') }}</h5>
                </div>
              </div>
              <!-- Single Top Features -->
              <div class="col-12 col-md-4">
                <div class="single-top-features d-flex align-items-center justify-content-center">
                  <i class="icon-assistance"></i>
                  <h5>{{ __('Amazing Teachers') }}</h5>
                </div>
              </div>
              <!-- Single Top Features -->
              <div class="col-12 col-md-4">
                <div class="single-top-features d-flex align-items-center justify-content-center">
                  <i class="icon-telephone-3"></i>
                  <h5>{{ __('Great Support') }}</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Top Feature Area End ##### -->

  <!-- ##### Course Area Start ##### -->
  <div class="academy-courses-area section-padding-100-0">
    <div class="container">
      <div class="row">
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="300ms">
            <div class="course-icon">
              <i class="icon-id-card"></i>
            </div>
            <div class="course-content">
              <h4>{{ __('Business School') }}</h4>
              <p>{{ __('Lead the future of Business') }}</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="400ms">
            <div class="course-icon">
              <i class="icon-worldwide"></i>
            </div>
            <div class="course-content">
              <h4>Computer Scince</h4>
              <p>{{ __('Epitome of modern technology') }}</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="500ms">
            <div class="course-icon">
              <i class="icon-map"></i>
            </div>
            <div class="course-content">
              <h4>{{ __('Photography') }}</h4>
              <p>{{ __('Multimedia and Visual Arts') }}</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="600ms">
            <div class="course-icon">
              <i class="icon-like"></i>
            </div>
            <div class="course-content">
              <h4>{{ __('Social Media') }}</h4>
              <p>{{ __('The power of social media marketing') }}</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="700ms">
            <div class="course-icon">
              <i class="icon-responsive"></i>
            </div>
            <div class="course-content">
              <h4>{{ __('Development') }}</h4>
              <p>{{ __('The future of web development') }}</p>
            </div>
          </div>
        </div>
        <!-- Single Course Area -->
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="single-course-area d-flex align-items-center mb-100 wow fadeInUp" data-wow-delay="800ms">
            <div class="course-icon">
              <i class="icon-message"></i>
            </div>
            <div class="course-content">
              <h4> {{ __('Design') }}</h4>
              <p>{{ __('The art of design') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Course Area End ##### -->

  <!-- ##### Testimonials Area Start ##### -->
  <div class="testimonials-area section-padding-100 bg-img bg-overlay"
    style="background-image: url({{ asset('img/bg-img/bg-2.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading white wow fadeInUp mx-auto text-center" data-wow-delay="300ms">
            <span>{{ __('our testimonials') }}</span>
            <h3>{{ __('See what our satisfied customers are saying about us') }}</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Testimonials Area -->
        <div class="col-12 col-md-6">
          <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
            <div class="testimonial-thumb">
              <img src="{{ asset('img/bg-img/t1.jpg') }}" alt="">
            </div>
            <div class="testimonial-content">
              <h5> {{ __('Great teachers') }}</h5>
              <p>{{ __('Renowned leacturers and teachers, leading in research and innovation all round the world') }}
              <h6><span>Ally Bakari,</span> {{ __('Student') }}</h6>
            </div>
          </div>
        </div>
        <!-- Single Testimonials Area -->
        <div class="col-12 col-md-6">
          <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="500ms">
            <div class="testimonial-thumb">
              <img src="{{ asset('img/bg-img/t2.jpg') }}" alt="">
            </div>
            <div class="testimonial-content">
              <h5>{{ __('Easy and user friendly courses') }}</h5>
              <p>{{ __('Courses are easy to understand and user friendly. I have learnt a lot from this academy.') }}}
              <h6><span>Massawe Peter,</span> {{ __('Student') }}</h6>
            </div>
          </div>
        </div>
        <!-- Single Testimonials Area -->
        <div class="col-12 col-md-6">
          <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="600ms">
            <div class="testimonial-thumb">
              <img src="{{ asset('img/bg-img/t3.jpg') }}" alt="">
            </div>
            <div class="testimonial-content">
              <h5> {{ __('I just love the courses here') }}</h5>
              <p>
                {{ __('Ambitious and hardworking teachers. I just love the courses here. I have learnt a lot from this academy.') }}
              <h6><span>Ross Cooper,</span> {{ __('Student') }}</h6>
            </div>
          </div>
        </div>
        <!-- Single Testimonials Area -->
        <div class="col-12 col-md-6">
          <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="700ms">
            <div class="testimonial-thumb">
              <img src="{{ asset('img/bg-img/t4.jpg') }}" alt="">
            </div>
            <div class="testimonial-content">
              <h5>{{ __('One good academy') }}</h5>
              <p>{{ __('One good academy. I have learnt a lot from this academy. I just love the courses here.') }}}
              <h6><span>James Simon,</span> {{ __('Student') }}</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="load-more-btn wow fadeInUp text-center" data-wow-delay="800ms">
            <a href="#" class="btn academy-btn">{{ __('See More') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Testimonials Area End ##### -->

  <!-- ##### Top Popular Courses Area Start ##### -->
  <div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-heading wow fadeInUp mx-auto text-center" data-wow-delay="300ms">
            <span>{{ __('The Best') }}</span>
            <h3>{{ __('Top Popular Courses') }}</h3>
          </div>
        </div>
      </div>
      <div class="row">

        <!-- Single Top Popular Course -->
        <div class="col-12 col-lg-6">
          <div class="single-top-popular-course d-flex align-items-center mb-30 wow fadeInUp flex-wrap"
            data-wow-delay="400ms">
            <div class="popular-course-content">
              <h5>{{ __('Business for begginers') }}</h5>
              <span>By Martha Kivuyo | March 18, 2013</span>
              <div class="course-ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>{{ __('Learn the basics of business and how to start your own business.') }}</p>
              <a href="#" class="btn academy-btn btn-sm"> {{ __('See More') }}</a>
            </div>
            <div class="popular-course-thumb bg-img"
              style="background-image: url({{ asset('img/bg-img/pc-1.jpg') }} );"></div>
          </div>
        </div>

        <!-- Single Top Popular Course -->
        <div class="col-12 col-lg-6">
          <div class="single-top-popular-course d-flex align-items-center mb-30 wow fadeInUp flex-wrap"
            data-wow-delay="500ms">
            <div class="popular-course-content">
              <h5>Web Development</h5>
              <span>By Dr. Abdi Hajji | January 18, 2043</span>
              <div class="course-ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>{{ __('Understand the basics of web development and how to create a website.') }}</p>
              <a href="#" class="btn academy-btn btn-sm"> {{ __('See More') }}</a>
            </div>
            <div class="popular-course-thumb bg-img"
              style="background-image: url({{ asset('img/bg-img/pc-2.jpg') }} );"></div>
          </div>
        </div>

        <!-- Single Top Popular Course -->
        <div class="col-12 col-lg-6">
          <div class="single-top-popular-course d-flex align-items-center mb-30 wow fadeInUp flex-wrap"
            data-wow-delay="600ms">
            <div class="popular-course-content">
              <h5>Digital Marketing 101</h5>
              <span>By Baraka Mafole | March 18, 2023</span>
              <div class="course-ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>{{ __('Affiliate marketing, social media marketing, email marketing and more.') }}
                <a href="#" class="btn academy-btn btn-sm"> {{ __('See More') }}</a>
            </div>
            <div class="popular-course-thumb bg-img"
              style="background-image: url({{ asset('img/bg-img/pc-3.jpg') }} );"></div>
          </div>
        </div>

        <!-- Single Top Popular Course -->
        <div class="col-12 col-lg-6">
          <div class="single-top-popular-course d-flex align-items-center mb-30 wow fadeInUp flex-wrap"
            data-wow-delay="700ms">
            <div class="popular-course-content">
              <h5>Business for begginers</h5>
              <span>By Simon Smith | March 18, 2018</span>
              <div class="course-ratings">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
              </div>
              <p>{{ __('Learn the basics of business and how to start your own business.') }}</p>
              <a href="#" class="btn academy-btn btn-sm"> {{ __('See More') }}</a>
            </div>
            <div class="popular-course-thumb bg-img"
              style="background-image: url({{ asset('img/bg-img/pc-4.jpg') }});"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Top Popular Courses Area End ##### -->

  <!-- ##### Partner Area Start ##### -->
  <div class="partner-area section-padding-0-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="partners-logo d-flex align-items-center justify-content-between flex-wrap">
            <a href="#"><img src="{{ asset('img/clients-img/partner-1.png') }} " alt=""></a>
            <a href="#"><img src="{{ asset('img/clients-img/partner-2.png') }} " alt=""></a>
            <a href="#"><img src="{{ asset('img/clients-img/partner-3.png') }} " alt=""></a>
            <a href="#"><img src="{{ asset('img/clients-img/partner-4.png') }} " alt=""></a>
            <a href="#"><img src="{{ asset('img/clients-img/partner-5.png') }} " alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### Partner Area End ##### -->

  <!-- ##### CTA Area Start ##### -->
  <div class="call-to-action-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cta-content d-flex align-items-center justify-content-between flex-wrap">
            <h3>{{ __('Do you want to enrole at our Academy? Get in touch!') }}</h3>
            <a href="#" class="btn academy-btn">{{ __('See More') }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ##### CTA Area End ##### -->
@endsection
