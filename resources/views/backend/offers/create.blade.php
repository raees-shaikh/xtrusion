@extends('backend.layouts.app')
@section('title', 'Create Offer')
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center ">
                        <div class="col-xl-4 col-md-6  mt-2 mb-2 ">
                            <legend class="h4">
                                Create Offer
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Create Offer</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow temp-a col-xl-6 px-sm-3 px-0">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.offer.store') }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-6 row">
                                <div class="col-xl-12   col-sm-12">
                                    <label>Categories</label>
                                    <select class="custom-select col-12" id="sel1" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $key => $categorie)
                                            <option value="{{ $categorie->id }}"
                                                {{ old('category_id') == $categorie->id ? 'selected' : '' }}>
                                                {{ $categorie->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <div class="text-danger" role="alert">{{ $errors->first('category_id') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-xl-2 mt-xl-0 mt-2">
                                    <label for="formGroupExampleInput" class="">Title</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="60" required name="title"
                                        value="{{ old('title') }}">
                                    @if ($errors->has('title'))
                                        <div class="text-danger" role="alert">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="offer_image" name="offer_image">
                                    @if ($errors->has('offer_image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('offer_image') }}</div>
                                    @endif
                                </div>
                                <div class="col-12 mb-3 mt-2">
                                    <label for="descriptions">Description</label>
                                    <textarea id="team-about" class="team-about" name="body" minlength="3" maxlength="20000">{{ old('body') }}</textarea>
                                    @if ($errors->has('body'))
                                        <div class="text-danger" role="alert">{{ $errors->first('body') }}</div>
                                    @endif
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js">
    </script> --}}
    <script>
        tinymce.init({
            selector: '.team-about',
            height: 200,
            plugins: 'textcolor colorpicker lists link',
            toolbar: "formatselect | fontsizeselect | bold italic strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify  | numlist bullist | link | outdent indent  | removeformat",
            // theme: 'modern',
            // plugins: ' fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample  charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern ',
            // toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            // image_advtab: true,
            // templates: [{
            //         title: 'Test template 1',
            //         content: 'Test 1'
            //     },
            //     {
            //         title: 'Test template 2',
            //         content: 'Test 2'
            //     }
            // ],
            // content_css: [
            //     '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',

            // ]
        });
    </script>
@endsection
