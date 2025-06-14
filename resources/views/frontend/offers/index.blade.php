@extends('frontend.company-profile')
@section('title', 'Latest Proposals - ')
@section('content')
    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie offer" data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/2.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0">Latest <span> Proposals </span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>

                    <li class="breadcrumb-item active" aria-current="page">Latest Proposals</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <!--service start-->

    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="section-title text-center my-2">
                    <h2 class="title">Latest <span> Proposals</span></h2>
                </div>
                @forelse ($categories as $category)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-box">
                            <div class="service-flip theme-bg">
                                <div class="service-flip-images service-flip-front">
                                    <div class="service-flip-title">
                                        <h5 class="mb-0"><a href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
                                        </h5>
                                    </div>
                                </div>
                                <div class="service-flip-desc service-flip-back">
                                    <div class="service-flip-text">
                                        <a class="btn btn-theme btn-radius cat-btn" href="{{ route('offer-index', $category->slug) }}">Read More</a>

                                        {{-- <a class="btn-simple" href="{{ route('offer-index', $category->slug) }}">Read More
                                            <i class="fas fa-arrow-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="text-center">No Offers Found</div>
                @endforelse
            </div>
            {{-- <div class="py-3">
                <nav aria-label="Page navigation">
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
            <div class="pagination-block my-0 text-center">
                <div class="col-xl-12 col-lg-12 mx-auto text-center">
                    <nav aria-label="Blog Pagination" class="pagination-custom-nav text-center mx-auto">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!--service end-->

@endsection
