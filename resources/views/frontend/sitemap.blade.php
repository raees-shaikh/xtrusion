@extends('frontend.layouts.app')
@section('title', 'Sitemap - ')
@section('content')

    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie" data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/site.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">Sitemap <span></span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>

                    <li class="breadcrumb-item active" aria-current="page">Sitemap</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row sitemap">

                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('/') }}">Home</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('company-profile') }}">Company
                            Profile</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('latest-offers') }}">Latest
                            Proposals</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('business-process') }}">Business
                            Process</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('exhibitions') }}">Exhibitions</a>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-3">
                    <div class="text-lg-start text-center">
                        <a class="btn btn-border btn-radius mt-2 w-100" href="{{ url('contact') }}">Contact Us</a>
                    </div>
                </div>

            </div>
        </div>

    </section>

@endsection
