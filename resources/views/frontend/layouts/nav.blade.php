
<!-- page wrapper start -->
<div class="page-wrapper">

    <!-- preloader start -->

    {{-- <div id="ht-preloader">
      <div class="loader clear-loader"><img src="{{asset('frontend/images/loader.gif')}}" alt=""></div>
    </div> --}}
    <div id="ht-preloader">
    <div class="loader clear-loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
</div>

    <!-- preloader end -->

    <!--header start-->

    <header id="site-header" class="header header-2">
      <div class="top-bar  d-none">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-4 col-md-8 px-media-0">
              <div class="topbar-link">
                <ul class="list-inline">
                  <li class="list-inline-item"><a href="mailto:sales@xtrusion.com"><i class="far fa-envelope"></i>sales@xtrusion.com</a>
                  </li>

                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-none d-lg-block text-center">
              <a class="navbar-brand logo me-0" href="{{url('/')}}">
                  <img id="logo-img2" class="img-fluid" src="{{asset('frontend/images/logo.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 text-end">
                <ul class="list-inline">

                    <li class="list-inline">
                      <a href="tel:912345678900" class="text-white"> <i class="fas fa-mobile-alt"></i>+91-2345678900</a>
                    </li>
                  </ul>

            </div>
          </div>
        </div>
      </div>
      <div id="header-wrap" class="fixed-header">
        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo rounded" href="{{url('/')}}">
                  <img id="logo-img" class="img-fluid rounded-lg" src="{{asset('frontend/images/logo.jpg')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <!-- Left nav -->
                  <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('/')? 'active' : ''}} " href="{{url('/')}}">Home</a>
                    </li>

                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('company-profile')? 'active' : ''}}" href="{{url('company-profile')}}">Company Profile</a>
                    </li>

                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('latest-offers')? 'active' : ''}}" href="{{url('latest-offers')}}">Latest Proposals</a>
                    </li>

                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('business-process')? 'active' : ''}}" href="{{url('business-process')}}">Business Process</a>
                    </li>

                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('exhibitions')? 'active' : ''}}" href="{{url('exhibitions')}}">Exhibitions</a>
                    </li>

                    <li class="nav-item "> <a class="nav-link {{URL::current()==url('contact')? 'active' : ''}}" href="{{url('contact')}}">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--header end-->

