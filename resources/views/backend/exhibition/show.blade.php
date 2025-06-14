@extends('backend.layouts.app')
@section('title', 'Exhibition - ' . $exhibition->title)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center mb-1">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                Exhibition Details
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-6 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Exhibition Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info statbox widget box box-shadow">
                <div class="row widget-header">
                    <div class="col-md-12">
                        <div class="work-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">
                                            <div class="col-12 px-0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="degree3" class="cust-title"
                                                                class="label-title">Title</label><br>
                                                            <p class="label-title">
                                                                {{ $exhibition->title }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="degree3" class="cust-title"
                                                                class="label-title">Description</label><br>
                                                            {{-- @if ($exhibition->descriptions) --}}
                                                                <p class="label-title my-0">
                                                                    {!! $exhibition->descriptions ?? '----'!!}
                                                                </p>
                                                            {{-- @endif --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="degree3" class="cust-title"
                                                                class="label-title">Start Date</label><br>
                                                            <p class="label-title">
                                                                {{ $exhibition->start_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="degree3" class="cust-title" class="label-title">End
                                                                Date</label><br>
                                                            <p class="label-title">
                                                                {{ $exhibition->end_date }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="degree3" class="cust-title"
                                                                class="label-title">Image</label><br>
                                                            <img width="100px" height="100px"
                                                                src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <a class="btn btn-info site-button"
                                                                href="{{ route('cms.exhibition.media.index', $exhibition->id) }}">
                                                                View Gallery
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="widget-content widget-content-area">

            </div> --}}
        </div>
    </div>
@endsection
@section('cdn')
    <link href="{{ asset('assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
@endsection
