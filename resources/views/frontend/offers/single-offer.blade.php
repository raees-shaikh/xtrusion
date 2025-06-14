@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - Latest Offers -'))
@section('content')


    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie offer" data-overlay="7"
        data-bg-img="{{ asset('frontend/images/breadcrumbs/1.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">{{ $category->title }}</h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('latest-offers') }}">Latest Proposals</a>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <!--body content start-->

    <div class="page-content">

        <!--service details start-->

        <section class="py-5 mt-lg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 px-3">
                        <div class="row d-flex">
                            @forelse($offers as $offer)
                                <div class="col-md-6 mb-4">
                                    <div class="item navy-bg h-100">
                                        <div class="service-item">
                                            <div class="service-description">
                                                <h3 class="pb-3 mb-4"><a
                                                        href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">{{ $offer->title }}</a>
                                                </h3>
                                                <div class="single-btn custom-button">
                                                    <a
                                                        href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">Read
                                                        More <i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-md-start">No Offers Found</div>
                            @endforelse
                        </div>
                        {{-- <div class=" pt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-arrow-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fas fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div> --}}
                        <div class="row text-center">
                            <div class="col-xl-12 col-lg-12 mt-3">
                                <nav aria-label="Blog Pagination">
                                    <ul class="pagination justify-content-center">
                                        <li>
                                            {{ $offers->onEachSide(1)->links('pagination::bootstrap-4') }}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 sidebar mt-0 pt-lg-0 pt-3 ">
                        <h2 class="title h3">Related <span>Categories</span></h2>
                        <div class="widget mb-5">
                            <div class="sidebar-links">
                                <ul class="list-unstyled">
                                    @forelse ($relatedCategories as $rCategory)
                                        <li class="active"><a href="{{ route('offer-index', $rCategory->slug) }}"
                                                class="align-items-center d-flex"><i
                                                    class="fas fa-angle-right"></i>{{ $rCategory->title }}</a>
                                        </li>
                                    @empty
                                        <div class="text-center">No Related Categories Found</div>
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

    @endsection
