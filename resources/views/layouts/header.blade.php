<!-- ##### Header Area Start ##### -->
<header class="header-area">

  <!-- Top Header Area -->
  <div class="top-header">
    <div class="h-100 container">
      <div class="row h-100">
        <div class="col-12 h-100">
          <div class="header-content h-100 d-flex align-items-center justify-content-between">
            <div class="academy-logo">
              <a href="{{ url('/') }}"><img src="{{ asset('img/core-img/logo.png') }}" alt=""></a>
            </div>

            <div class="clearfix">
              <div class="dropdown float-right">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <span class="text-uppercase">
                    <img class="rounded"
                      src="{{ asset('images/flags/' . LaravelLocalization::getCurrentLocale() . '.svg') }}" width="26"
                      alt="">
                    {{ LaravelLocalization::getCurrentLocale() }}</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                  @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <a class="dropdown-item text-uppercase" rel="alternate" hreflang="{{ $localeCode }}"
                      href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                      <img class="rounded" src="{{ asset('images/flags/' . $localeCode . '.svg') }}" width="26"
                        alt="{{ $properties['native'] }}">
                      {{ $properties['native'] }}
                    </a>
                  @endforeach
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Area -->
  <div class="academy-main-menu">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="academyNav">

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">

            <!-- close btn -->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <!-- Nav Start -->
            <div class="classynav">
              <ul>
                <li><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('Home') }}</a></li>
                <li class="active"><a class="active"
                    href="{{ LaravelLocalization::localizeUrl('/about') }} ">{{ __('About Us') }}</a>
                </li>
                <li><a href="{{ LaravelLocalization::localizeUrl('/courses') }} ">{{ __('Courses') }}</a></li>
                <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }} ">{{ __('Contact') }}</a></li>
              </ul>
            </div>
            <!-- Nav End -->
          </div>

          <!-- Calling Info -->
          <div class="calling-info">
            <div class="call-center">
              <a href="tel:+255747991498"><i class="icon-telephone-2"></i> <span>(+255) 747 99 1498</span></a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ##### Header Area End ##### -->
