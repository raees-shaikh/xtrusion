@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers - '))
@section('content')


    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie offer" data-overlay="7"
        data-bg-img="{{ asset('frontend/images/breadcrumbs/3.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">{{ $offer->title }}<span></span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('latest-offers') }}">Latest Proposals</a>
                    </li>
                    <li class="breadcrumb-item "><a href="{{ route('offer-index', $category->slug) }}"
                            class="active-link">{{ $category->title }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <div class="page-content">

        <!--service details start-->

        <section class="py-5 my-lg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h2 class="title">{{ $offer->title }}</h2>
                        <div class="service-images">
                            @if ($offer->image)
                                <img class="img-fluid w-100" src="{{ asset('storage/images/offers/' . $offer->image) }}"
                                    alt="">
                            @endif
                        </div>
                        <div class="service-details mt-md-4 mt-2">
                            <p class="lead"> {!! $offer->body !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 sidebar mt-3 mt-lg-0">
                        <h2 class="title h3">Related <span>Offers</span></h2>
                        <div class="widget mb-3">
                            <div class="sidebar-links">
                                <ul class="list-unstyled">
                                    @forelse ($relatedOffers as $ro)
                                        <li class="active"><a
                                                href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}"
                                                class="align-items-center d-flex"><i
                                                    class="fas fa-angle-right"></i>{{ $ro->title }}</a>
                                        </li>
                                    @empty
                                        <div class="text-start">No Related Offers Found</div>
                                    @endforelse
                                    {{-- <li><a href="#"><i class="fas fa-angle-right"></i> Energy & Power Engineering</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Petroleum and Gas</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Agriculture Engineering</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Mechanical Engineering</a>
                                    </li>
                                    <li><a href="#"><i class="fas fa-angle-right"></i> Civil Engineering</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--service details end-->
    </div>
@endsection
