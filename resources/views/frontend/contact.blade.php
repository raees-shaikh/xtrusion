@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
@section('content')

    <!--page title start-->

    <section class="page-title contact overflow-hidden text-center parallaxie" data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/contact.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">Contact <span>Us</span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <!--body content start-->

    <div class="page-content">

        <!--contact start-->
        <section class="contact-2 py-5">
            <div class="container">
                <div class="row align-items-center g-0 d-flex">
                    <div class="col-lg-4 order-lg-1 order-2 mt-lg-0 mt-4">
                        <div class="p-5  theme-bg text-white z-index-1">

                            <h2 class="title touch">Get In <span>Touch!</span></h2>
                            <p>We're here to help answer any question you might have. We look forward to hearing from you.
                            </p>
                            <ul class="contact-info list-unstyled mt-4">
                                <li class="mb-4"><i class="flaticon-paper-plane"></i><span class="text-capitalize">Address</span>
                                    <p>Mumbai</p>
                                </li>
                                <li class="mb-4"><i class="flaticon-phone-call"></i><span class="text-capitalize">Phone</span><a
                                        href="tel:912345678900">+91-2345678900</a>
                                </li>
                                <li><i class="flaticon-message"></i><span class="text-capitalize">Email</span><a href="mailto:sales@xtrusion.com">
                                        sales@xtrusion.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-2 order-1">
                        <div class="contact-main white-bg p-5  ps-lg-11 ms-lg-n6 border-bottom-0">
                            <h2 class="title mb-4">Contact Us For <span>Help</span></h2>
                            <form method="post" action="{{ route('frontend.contact.submit') }}">
                                {{-- <div class="messages"></div> --}}
                                @csrf
                                <input type="hidden" class="form-control" name="page_name" value="Contact">
                                <input type="hidden" name="recaptcha_response" value="" id="recaptchaResponse">
                                <div class="form-group">
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Full Name" required="required" minlength="3" maxlength="30"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        value="{{ old('email') }}" placeholder="Email Address " required="required"
                                        minlength="5" maxlength="40">
                                    @if ($errors->has('email'))
                                        <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="form_phone" type="tel" name="phone" class="form-control"
                                        value="{{ old('phone') }}" placeholder="Phone Number" required="required"
                                        minlength="10" maxlength="10">
                                    @if ($errors->has('phone'))
                                        <div class="help-block with-errors">{{ $errors->first('phone') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="form_subject" type="text" name="subject" class="form-control"
                                        value="{{ old('subject') }}" placeholder="Subject" required="required"
                                        minlength="3" maxlength="100">
                                    @if ($errors->has('subject'))
                                        <div class="help-block with-errors">{{ $errors->first('subject') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <textarea id="form_message" name="message" class="form-control" rows="4" placeholder="Message" required="required"
                                        minlength="5" maxlength="250">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <div class="help-block with-errors">{{ $errors->first('message') }}</div><br>
                                    @endif
                                    @if ($errors->has('recaptcha_response'))
                                        <div class="help-block with-errors">
                                            {{ $errors->first('recaptcha_response') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="text-lg-start text-center">
                                    <button class="btn btn-border btn-radius"><span>Submit Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact end-->

        <!--map start-->
        <section class="overflow-hidden p-0 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="map iframe-h">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.14571337597!2d72.71637411447857!3d19.082177513371683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1736848517814!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--map end-->
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
