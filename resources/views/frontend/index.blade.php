@extends('frontend.layouts.app')
@section('title', '')
@section('content')
    <!-- Hero Area -->
    <section class="banner p-0 position-relative fullscreen-banner ">
        <div class="banner-slider owl-carousel no-pb" data-sdots="false">
            <div class="item" data-bg-img="{{ asset('frontend/images/bg/first.jpg') }}" data-overlay="7"></div>
            <div class="item" data-bg-img="{{ asset('frontend/images/bg/second.jpg') }}" data-overlay="7"></div>
            <div class="item" data-bg-img="{{ asset('frontend/images/bg/third.jpg') }}" data-overlay="7"></div>
        </div>
        <div class="align-center pt-5">
            <div class="container pt-3">
                <div class="row justify-content-center text-sm-start text-center">
                    <div class="col col-md-12 d-md-flex align-items-start">
                        {{-- <img id="bnr-logo" class="img-fluid" src="{{asset('frontend/images/x.jpeg')}}" alt=""> --}}
                        <div class=" mt-5 pt-xl-5 banner-text">
                            <h1 class="text-white mb-4">The Largest Industrial <br
                                    class="d-lg-block d-none"><span>Company</span></h1>
                            <p class="lead text-white pb-4">Xtrusion is leading Indian International Brokers for RELOCATION
                                of
                                 TEXTILE Plants,
                                <br>Machinery & Technology from different Countries worldwide focusing though on CHINA
                                majorly.
                            </p>
                            <div class="">
                                <a class="btn btn-theme btn-radius" href="{{ url('company-profile') }}">Know More</a>
                                <a class="btn btn-border btn-radius" href="{{ url('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <!--body content start-->
    <div class="page-content">


<!--about us start-->

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
              <div class="about-img">
                <img class="img-fluid" src="{{ asset('frontend/images/about/4.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 box-shadow white-bg p-md-4 p-3 mt-5 mt-lg-0">
          <h5>What We Do</h5>
          <p class="lead mb-2">Xtrusion is leading Indian International Brokers for RELOCATION of
             TEXTILE
            Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA
            majorly.</p>
        <p class="lead mb-2">Our company has experience of more than two decades & has the ability of being
            most extensive
            brokers for all kinds of textile plants.</p>
        <p class="lead mb-lg-2">To name a few past experiences, we have sold more than 500,000 spindles of Ring
            Spinning Plant &
            Machineries, 60,000 Rotors, 1000 Looms, 200 Circular Knitting Machines, 100 Flat Knitting, Warp
            Knitting, Non-Woven plants, Man-made Fibre plants Etc.</p>

        <div class="text-lg-start text-center">
            <a class="btn btn-border btn-radius mt-lg-2 mt-3 mb-lg-0 mb-3" href="{{ url('company-profile') }}">Read
                More</a>
        </div>

          </div>

      </div>
    </div>

  </section>

  <!--about us end-->
        {{-- <!--about us start-->
        <section class="grey-bg py-5 ">
            <div class="container pt-lg-3">
                <div class="row text-center d-lg-none d-block">
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
                                <img class="img-fluid w-100" src="{{ asset('frontend/images/about/1.webp') }}"
                                    alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid w-100" src="{{ asset('frontend/images/about/2.webp') }}"
                                    alt="">
                            </div>

                            <div class="item">
                                <img class="img-fluid w-100" src="{{ asset('frontend/images/about/3.webp') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mt-lg-0 profile">
                        <div class="row  d-lg-block d-none">
                            <div class="col-lg-8 col-md-10 pb-0">
                                <div class="section-title  mb-2 mt-0">
                                    <h2 class="title">about <span>Company</span></h2>
                                </div>
                            </div>
                        </div>
                        <p class="lead mb-2">Xtrusion is leading Indian International Brokers for RELOCATION of
                            Used-Secondhand TEXTILE
                            Plants, Machinery & Technology from different Countries worldwide focusing though on CHINA
                            majorly.</p>
                        <p class="lead mb-2">Our company has experience of more than two decades & has the ability of being
                            most extensive
                            brokers for all kinds of textile plants.</p>
                        <p class="lead mb-2">To name a few past experiences, we have sold more than 500,000 spindles of Ring
                            Spinning Plant &
                            Machineries, 60,000 Rotors, 1000 Looms, 200 Circular Knitting Machines, 100 Flat Knitting, Warp
                            Knitting, Non-Woven plants, Man-made Fibre plants Etc.</p>

                        <div class="text-lg-start text-center">
                            <a class="btn btn-border btn-radius mt-lg-2 mt-3" href="{{ url('company-profile') }}">Read
                                More</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--about us end--> --}}

        <!--service start-->

        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="section-title text-center mb-3 mt-2">
                        <h2 class="title">Latest <span> Proposals</span></h2>
                    </div>
                    @forelse ($categories as $category)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-box">
                                <div class="service-flip theme-bg">
                                    {{-- <div class="service-flip-images service-flip-front"
                                        data-bg-img="{{ asset('frontend/images/service/01.jpg') }}"> --}}
                                    <div class="service-flip-images service-flip-front">
                                        <div class="service-flip-title">
                                            <h5 class="mb-0"><a
                                                    href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="service-flip-desc service-flip-back">
                                        <div class="service-flip-text">
                                            <a class="btn btn-theme btn-radius cat-btn" href="{{ route('offer-index', $category->slug) }}">Read More</a>

                                            {{-- <a class="btn-simple" href="{{ route('offer-index', $category->slug) }}">Read
                                                More <i class="fas fa-arrow-right"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">No Offers Found</div>
                    @endforelse
                </div>
                @if ($categoriesCount > 8)
                    <div class="text-center pt-3">
                        <a class="btn btn-border btn-radius mt-2 mx-auto " href="{{ url('latest-proposals') }}">View
                            All</a>
                    </div>
                @endif
            </div>
        </section>

        <!--service end-->

        <!--counter start-->

        <section class="text-center grey-bg pt-3 pb-5">
            <div class="container">
                <div class="section-title text-center mt-3 mb-lg-4 mb-3 pt-0">
                    <h2 class="title">About <span> Quality</span></h2>
                    <h5 class="text-capitalize">Lowest Rates & Best Quality Always</h5>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="counter style-2"> <i class="flaticon-pencil"></i>
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

        <!--progress start-->

        <section class="dark-bg position-relative pb-5 pt-sm-5 pt-3 mb-5">
            <div class="side-background side-image">
                <div class="row">
                    <div class="col-lg-6 img-side img-left "
                        style="background: url(frontend/images/breadcrumbs/get.jpg) no-repeat  center; background-size: cover;">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-lg-none d-block pb-4">
                        <img src="{{ asset('frontend/images/breadcrumbs/get.jpg') }}" alt=""
                            class="w-100 index-img">
                    </div>
                    <div class="col-lg-6 col-md-12 ms-auto ps-lg-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title d-lg-block d-grid  mb-0 px-lg-0 px-sm-4 px-1">
                                    <h2 class="title">Get In <span>Touch!</h2>
                                </div>
                                <div class="row text-white mt-lg-5">
                                    <div
                                        class="contact-main px-5 py-3 pl-lg-3-5 ps-lg-11 ms-lg-n6 border-bottom-0 index-form">
                                        <form id="contact-form-2" method="post"
                                            action="{{ route('frontend.contact.submit') }}">
                                            @csrf
                                            <input type="hidden" class="form-control" name="page_name"
                                                value="Get In Touch">
                                            <input type="hidden" name="recaptcha_response" value=""
                                                id="recaptchaResponse">
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                    placeholder="Full Name" required="required" minlength="3"
                                                    maxlength="30" value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                    <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email"
                                                    class="form-control" value="{{ old('email') }}"
                                                    placeholder="Email Address " required="required" minlength="5"
                                                    maxlength="40">
                                                @if ($errors->has('email'))
                                                    <div class="help-block with-errors">{{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="form_phone" type="tel" name="phone"
                                                    class="form-control" value="{{ old('phone') }}"
                                                    placeholder="Phone Number" required="required" minlength="10"
                                                    maxlength="10">
                                                @if ($errors->has('phone'))
                                                    <div class="help-block with-errors">{{ $errors->first('phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input id="form_subject" type="text" name="subject"
                                                    class="form-control" value="{{ old('subject') }}"
                                                    placeholder="Subject" required="required" minlength="3"
                                                    maxlength="100">
                                                @if ($errors->has('subject'))
                                                    <div class="help-block with-errors">{{ $errors->first('subject') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <textarea id="form_message" name="message" class="form-control" rows="4" placeholder="Message"
                                                    required="required" minlength="5" maxlength="250">{{ old('message') }}</textarea>
                                                @if ($errors->has('message'))
                                                    <div class="help-block with-errors">{{ $errors->first('message') }}
                                                    </div><br>
                                                @endif
                                                @if ($errors->has('recaptcha_response'))
                                                    <div class="help-block with-errors">
                                                        {{ $errors->first('recaptcha_response') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="text-lg-start text-center">
                                                <button class="btn btn-border btn-radius mt-4"><span>Submit Now</span>
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--subscribe start-->

<section class="dark-bg py-5 mb-5" data-bg-img="frontend/images/bg/01.jpg" data-overlay="8">
    <div class="container">
      <div class="row align-items-center text-lg-start text-center">
        <div class="col-md-8 col-sm-12">
          <h2 class="text-white">Are You Looking Great Solution <span class="text-theme font-weight-bold"> For Your Industry?</span></h2>
        </div>
        <div class="col-md-4 col-sm-12 text-md-end mt-3 mt-md-0"> <a href="{{url('/contact')}}" class="btn btn-theme"><span>Contact Us</span></a>
        </div>
      </div>
    </div>
  </section>

  <!--subscribe end-->
        <!--progress end-->
        @if ($data)
            <section class="pb-5 pt-0">
                <div class="container">
                    <div class="row ">
                        <div class="section-title text-center mb-3 mt-0">
                            <h2 class="title">Technical <span> Data</span></h2>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-theme btn-radius pdf" href="{{ asset('storage/data/' . $data->filename) }}"
                                target="_blank">Open PDF</a>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!--counter end-->
    </div>
@endsection
@section('js')
    {{-- extra page specific js --}}
    <script
        src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
        async defer></script>
    <script>
        var onloadCallback = function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                    action: 'submit'
                }).then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                })
            })
        }
    </script>
@endsection
