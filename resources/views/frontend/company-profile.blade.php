@extends('frontend.layouts.app')
@section('title', 'Company Profile - ')
@section('content')

    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie" data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/about.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">Company <span>Profile</span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>

                    <li class="breadcrumb-item active" aria-current="page">Company Profile</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <!--body content start-->

    <div class="page-content">
        <!--about us start-->
        {{-- <section class="grey-bg py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-8 col-md-10 mx-auto pb-lg-2">
                        <div class="section-title mb-md-4 mb-2 mt-0">
                            <h2 class="title">about <span>Company</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="owl-carousel box-shadow owl-theme no-pb" data-dots="false" data-nav="true"
                            data-items="1" data-autoplay="true">
                            <div class="item">
                                <img class="img-fluid w-100 h-100" src="{{ asset('frontend/images/about/1.webp') }}"
                                    alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid w-100 h-100" src="{{ asset('frontend/images/about/2.webp') }}"
                                    alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid w-100 h-100" src="{{ asset('frontend/images/about/3.webp') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 profile">
                        <p class="lead mb05">Xtrusion is leading Indian International Brokers for RELOCATION of
                            Used-Secondhand
                            TEXTILE
                            Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA
                            majorly.</p>
                        <p class="lead mb05">Our company has experience of more than two decades & has the ability of being
                            most extensive
                            brokers for all kinds of textile plants.</p>
                        <p class="lead mb05">To name a few past experiences, we have sold more than 500,000 spindles of Ring
                            Spinning Plant &
                            Machineries, 60,000 Rotors, 1000 Looms, 200 Circular Knitting Machines, 100 Flat Knitting, Warp
                            Knitting, Non-Woven plants, Man-made Fibre plants like Polyester POY, FDY, Nylon 66, Viscose
                            Staple Fiber, Viscose filament yarn, Acrylic, Tajima, Barudan Embroidery machines other.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="grey-bg py-5">
        <div class="container">
            <div class="row text-center">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="section-title mt-0 mb-3 py-0">
                  <h2 class="title">About <span>Company</span></h2>
                </div>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-12">
                <div class="row">
                  <div class="col-md-6 pe-2 d-md-block d-none">
                    <div class="about-img mb-3">
                      <img class="img-fluid" src="{{ asset('frontend/images/about/1.webp') }}" alt="">
                    </div>
                    <div class="about-img">
                      <img class="img-fluid" src="{{ asset('frontend/images/about/2.webp') }}" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 mt-4 ps-2">
                    <div class="about-img mb-3 d-md-block d-none">
                      <img class="img-fluid" src="{{ asset('frontend/images/about/3.webp') }}" alt="">
                    </div>
                    <div class="about-img ">
                      <img class="img-fluid" src="{{ asset('frontend/images/about/4.png') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 box-shadow white-bg p-md-4 p-3 mt-5 mt-lg-0">
                <h5>What We Do</h5>
                <p class="lead mb05">Xtrusion is leading Indian International Brokers for RELOCATION of
                    
                    TEXTILE
                    Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA
                    majorly.</p>
                <p class="lead mb05">Our company has experience of more than two decades & has the ability of being
                    most extensive
                    brokers for all kinds of textile plants.</p>
                <p class="lead mb05">To name a few past experiences, we have sold more than 500,000 spindles of Ring
                    Spinning Plant &
                    Machineries, 60,000 Rotors, 1000 Looms, 200 Circular Knitting Machines, 100 Flat Knitting, Warp
                    Knitting, Non-Woven plants, Man-made Fibre plants like Polyester POY, FDY, Nylon 66, Viscose
                    Staple Fiber, Viscose filament yarn, Acrylic, Tajima, Barudan Embroidery machines other.</p>

                </div>

            </div>
          </div>

        </section>


        <!--about us end-->
{{--
        <div class="row mt-5">
            <div class="col">
                <div class="tab style-2 text-center">
                    <!-- Nav tabs -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="tab-5" data-bs-toggle="tab" data-bs-target="#tab5-1"
                                type="button" role="tab" aria-controls="tab5-1" aria-selected="true">Our
                                Mission</button>
                            <button class="nav-link" id="tab-6" data-bs-toggle="tab" data-bs-target="#tab6-1"
                                type="button" role="tab" aria-controls="tab6-1" aria-selected="false">Our
                                Vision</button>
                            <button class="nav-link" id="tab-7" data-bs-toggle="tab" data-bs-target="#tab7-1"
                                type="button" role="tab" aria-controls="tab7-1" aria-selected="false">Our
                                Values</button>
                        </div>
                    </nav>
                    <div class="tab-content white-bg box-shadow" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="tab5-1" role="tabpanel" aria-labelledby="tab-5">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-1">
                                    <img class="img-fluid" src="{{ asset('frontend/images/profile/mision.png') }}"
                                        alt="">
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0 text-md-start text-center profile">
                                    <h4>Our <span class="text-theme">Mission</span></h4>
                                    <p class="lead">We lead with a service mindset, working to earn our clients’
                                        trust and exceed their expectations by understanding and overdelivering on
                                        their goals.</p>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab6-1" role="tabpanel" aria-labelledby="tab-6">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-1">
                                    <img class="img-fluid" src="{{ asset('frontend/images/profile/vision.png') }}"
                                        alt="">
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0 text-md-start text-center profile">
                                    <h4>Our <span class="text-theme">Vision</span></h4>
                                    <p class="lead">As a Xtrusion B2B financial services company we are committed
                                        to providing innovative solutions that have a positive impact on our
                                        clients, our employees, their families, and the communities where we live,
                                        work and play.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab7-1" role="tabpanel" aria-labelledby="tab-7">
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-1">
                                    <img class="img-fluid" src="{{ asset('frontend/images/profile/value.png') }}"
                                        alt="">
                                </div>
                                <div class="col-md-6 mt-3 mt-md-0 text-md-start text-center profile">
                                    <h4>Our <span class="text-theme">Values</span></h4>
                                    <p class="lead">With more than 35 years of experience working with the
                                        world’s leading companies, banks, professional advisors, law firms and other
                                        institutions, we mobilize our people, culture, and ideas to enable our
                                        clients to succeed, expand prosperity, and generate economic progress for
                                        all.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

<!--tab start-->

<section class="dark-bg position-relative py-5-after-lg">
    <div class="side-background side-image ">
      <div class="row">
        <div class="col-lg-6 img-side img-right" style="background: url(frontend/images/profile/mision.png) no-repeat left center; background-size: cover;"></div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 me-auto">

          <div class="row mt-5">
            <div class="col-sm-12">
              <div class="tab text-white">
                <!-- Nav tabs -->
                <nav class="text-lg-start text-center">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="tab-1" data-bs-toggle="tab" data-bs-target="#tab1-1" type="button" role="tab" aria-controls="tab1-1" aria-selected="true">Our Mission</button>
                    <button class="nav-link" id="tab-2" data-bs-toggle="tab" data-bs-target="#tab2-1" type="button" role="tab" aria-controls="tab2-1" aria-selected="false">Our Vission</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="tab1-1" role="tabpanel" aria-labelledby="tab-1">
                    <p class="mb-0 lead">We lead with a service mindset, working to earn our clients’
                        trust and exceed their expectations by understanding and overdelivering on
                        their goals. With more than 35 years of experience working with the
                        world’s leading companies.</p>

                  </div>
                  <div class="tab-pane fade" id="tab2-1" role="tabpanel" aria-labelledby="tab-2">
                    <p class="mb-0 lead">As a Xtrusion B2B financial services company we are committed
                        to providing innovative solutions that have a positive impact on our
                        clients, our employees, their families, and the communities where we live,
                        work and play.</p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--tab end-->


    <!--counter start-->

    <section class="text-center grey-bg py-5">
        <div class="container">
            <div class="section-title text-center mt-3 pt-0 mb-md-5 mb-2">
                <h2 class="title">About <span> Quality</span></h2>
                <h5 class="text-capitalize">Lowest Rates & Best Quality Always</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="counter style-2">
                        <i class="flaticon-pencil"></i>
                        <div class="d-flex justify-content-center text-center aling-items-center">
                            <span class="count-number" data-to="900" data-speed="1000">900</span>
                            <h2 class="custom-plus">+</h2>
                        </div>
                        <label>Plants & Machinery
                            Sold</label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="counter style-2 "> <i class="flaticon-employee"></i>
                        <div class="d-flex justify-content-center text-center aling-items-center">
                            <span class="count-number" data-to="7000" data-speed="1000">7000</span>
                            <h2 class="custom-plus">+</h2>
                        </div>
                        <label>Happy Clients</label>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-8 col-md-6">
                    <div class="counter style-2 px-0"> <i class="flaticon-innovation"></i>
                        <div class="d-flex justify-content-center text-center aling-items-center">
                            <span class="count-number" data-to="33" data-speed="1000">33</span>
                            <h2 class="custom-plus">+</h2>
                        </div>
                        <label>World-Wide Exhibitions Participated</label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--counter end-->

@endsection
