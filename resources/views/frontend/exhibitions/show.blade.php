@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))
@section('content')

    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie exhi" data-overlay="7"
        data-bg-img="{{ asset('frontend/images/breadcrumbs/6.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">{{ ucfirst($exhibition->title) }}<span></span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('frontend.exhibitions.index') }}">Exhibitions</a>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <div class="page-content">

        <!--service details start-->

        <section class="pt-5 pb-md-5 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <h2 class="title">{{ ucfirst($exhibition->title) }}</h2>
                        <div class="service-images">
                            <img class="img-fluid w-100 exhibition"
                                src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 sidebar mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-xl-6 col-5">
                                <h3 class="title">Description</h3>
                            </div>
                            <div class="col-xl-6 col-7 ">
                                <div class="post-date px-0 w-100 text-center">
                                    {{ dd_format($exhibition->start_date, 'd-m-Y') }} To
                                    {{ dd_format($exhibition->end_date, 'd-m-Y') }}</div>
                            </div>
                        </div>
                        <div class="service-details">
                            <p class="lead m-0">{!! $exhibition->descriptions !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @if ($medias->count() > 0)
            <section class="pb-5 pt-0">
                <div class="container">
                    <div class="text-center">
                        <h2 class="title ">Gallery</h2>

                    </div>
                    <div id="lightgallery">
                        <div class="grid-row d-flex justify-content-center text-center text-xl-start">
                            @forelse ($medias as $media)
                                <a href="{{ asset('storage/images/medias/' . $media->filename) }}" data-lg-size="1600-2400">
                                    <img alt="img1" class="g-img"
                                        src="{{ asset('storage/images/medias/' . $media->filename) }}">
                                </a>
                                {{-- <a href="frontend/images/bg/02.jpg" data-lg-size="1600-2400">
                                <img alt="img2"class="g-img" src="{{ asset('frontend/images/bg/02.jpg') }}" />
                            </a>

                            <a href="frontend/images/bg/02.jpg" data-lg-size="1600-2400">
                                <img alt="img2" class="g-img" src="{{ asset('frontend/images/bg/02.jpg') }}" />
                            </a> --}}
                            @empty
                                <div class="text-center pb-4">
                                    No Gallery Found
                                </div>
                            @endforelse
                        </div>
                    </div>
                    {{-- <div class=" pt-5 mt-0">
                        <nav aria-label="Page navigation ">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="{{ url('offer') }}"><i
                                            class="fas fa-arrow-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="{{ url('offer') }}">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="{{ url('offer') }}">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="{{ url('offer') }}">3</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="{{ url('offer') }}"><i
                                            class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>
            </section>
        @endif

    </div>

@endsection
