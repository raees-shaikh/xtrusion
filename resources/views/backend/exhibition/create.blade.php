@extends('backend.layouts.app')
@section('title', 'Create Exhibition')
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center ">
                        <div class="col-xl-4 col-md-6  mt-2 mb-2 ">
                            <legend class="h4">
                                Create Exhibition
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Create Exhibition</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow temp-a col-xl-6 px-sm-3 px-0">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.exhibition.store') }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-4 row">
                                <div class="col-xl-12  col-md-6 col-sm-12">
                                    <label>Title</label>
                                    <input class="form-control" type="text" id="title" name="title"
                                        placeholder="Enter Title" value="{{ old('title') }}" maxlength="120" minlength="3"
                                        required>
                                    @if ($errors->has('title'))
                                        <div class="text-danger" role="alert">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-xl-2 mt-md-0 mt-2 ">
                                    <label>Start Date</label>
                                    <input class="form-control" type="date" id="date" name="start_date"
                                        value="{{ old('start_date') }}" required>
                                    @if ($errors->has('start_date'))
                                        <div class="text-danger" role="alert">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-2">
                                    <label>End Date</label>
                                    <input class="form-control" type="date" id="date" name="end_date"
                                        value="{{ old('end_date') }}" required>
                                    @if ($errors->has('end_date'))
                                        <div class="text-danger" role="alert">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-2">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="image" name="image" required>
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-sm-12 mt-2">
                                    <label>Description</label>
                                    <textarea placeholder ="enter the description" id="team-about" name="descriptions" minlength="3" maxlength="18000">{{ old('descriptions') }}</textarea>
                                    @if ($errors->has('descriptions'))
                                        <div class="text-danger" role="alert">{{ $errors->first('descriptions') }}</div>
                                    @endif
                                </div>
                                {{-- <div class="col-xl-12  col-md-6 col-sm-12 py-2">
                                    <label for="formGroupExampleInput" class="">Image</label>
                                    <input type="file" class="form-control" id="formGroupExampleInput"required
                                        name="image">
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div> --}}
                                {{-- <div class="col-xl-12  col-md-6 col-sm-12 py-2">
                                    <label for="degree2">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description" rows="3" name="descriptions" minlength="3"
                                        maxlength="250">{{ old('descriptions') }}</textarea>
                                    @if ($errors->has('descriptions'))
                                        <div class="text-danger" role="alert">{{ $errors->first('descriptions') }}
                                        </div>
                                    @endif
                                </div> --}}
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
            selector: '#team-about',
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
