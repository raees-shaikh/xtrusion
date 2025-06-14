@extends('frontend.company-profile')
@section('title', 'Exhibitions - ')
@section('content')



    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie exhi" data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/5.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0"> Exhibitions<span></span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                    </li>

                    <li class="breadcrumb-item active" aria-current="page"> Exhibitions</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->
    <!--blog start-->

    <section class="py-5">
        <div class="container pt-3">
            <div class="row text-center">
                <div class="col-lg-8 col-md-10 mx-auto">
                </div>
            </div>
            <div class="row">
                @forelse($exhibitions as $exhibition)
                    <div class="col-lg-4 col-md-6 mb-sm-4 mb-5">
                        <div class="post h-100">
                            <div class="post-image h-auto position-relative">
                                <img src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" alt="">
                                <div class="post-date"> {{ dd_format($exhibition->start_date, 'd-m-Y') }} To
                                    {{ dd_format($exhibition->end_date, 'd-m-Y') }}</div>
                            </div>
                            <div class="">
                                <div class="post-desc pt-3 pb-2">
                                    <div class="post-title">
                                        <h5><a
                                                href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}">{{ ucfirst($exhibition->title) }}</a>
                                        </h5>
                                    </div>
                                </div>

                            </div class="pt-0 ">

                            <div class="text-start px-4 py-3 pt-0 border-top-2">
                                <a class="btn btn-theme btn-radius"
                                    href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}">Read More</a>


                                {{-- <a class="post-btn"
                                        href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}">Read More<i
                                            class="ms-2 fas fa-long-arrow-alt-right"></i></a> --}}
                            </div>
                        </div>
                    </div>
            </div>


        @empty
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b10">
                <p class="text-center mb-0">No Exhibitions Found</p>
            </div>
            @endforelse
        </div>
        </div>
        {{-- <div class=" pt-4  pb-3">
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
        <div class="row text-center ">
            <div class="col-xl-12 col-lg-12 justify-content-center d-flex align-items-center">
                <nav aria-label="Blog Pagination">
                    <ul class="pagination text-center m-b30 m-t40">
                        <li class="page-item">
                            {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!--blog end-->

@endsection
