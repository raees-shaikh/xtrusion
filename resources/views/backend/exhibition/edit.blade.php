@extends('backend.layouts.app')
@section('title', 'Edit Exhibition - ' . $exhibition->title)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                Edit Exhibition
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Exhibition</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow col-xl-6 px-sm-3 px-0">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="" method="POST" action="{{ route('cms.exhibition.update', $exhibition->id) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <div class="col-xl-12  col-md-6 col-sm-12">
                                    <label for="formGroupExampleInput">Title</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput"
                                        placeholder="Enter Name" minlength="3" maxlength="120" required name="title"
                                        value="{{ old('title') ?? $exhibition->title }}">
                                    @if ($errors->has('title'))
                                        <div class="text-danger" role="alert">{{ $errors->first('title') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-xl-2 mt-md-0 mt-2">
                                    <label>Start Date</label>
                                    <input class="form-control" type="date" id="date" name="start_date"
                                        value="{{ old('start_date') ? dd_format(old('start_date'), 'Y-m-d') : dd_format($exhibition->start_date, 'Y-m-d') }}"
                                        required>
                                    @if ($errors->has('start_date'))
                                        <div class="text-danger" role="alert">{{ $errors->first('start_date') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-2">
                                    <label>End Date</label>
                                    <input class="form-control" type="date" id="date" name="end_date"
                                        value="{{ old('end_date') ? dd_format(old('end_date'), 'Y-m-d') : dd_format($exhibition->end_date, 'Y-m-d') }}"
                                        required>
                                    @if ($errors->has('end_date'))
                                        <div class="text-danger" role="alert">{{ $errors->first('end_date') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-md-6 col-sm-12 mt-2">
                                    <label>Image</label><br>
                                    @if ($exhibition->image)
                                        <img width="100" height="100" class="mr-2"
                                            src="{{ asset('/storage/images/exhibition/' . $exhibition->image) }}"
                                            alt=""></td>
                                    @endif
                                    <div class="form-group mt-4">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                                <div class="col-xl-12  col-sm-12">
                                    <label>Description</label><br>
                                    <textarea placeholder ="enter the description" id="team-about" name="descriptions" minlength="10" maxlength="18000">{{ old('descriptions') ?? $exhibition->descriptions }}</textarea>
                                    @if ($errors->has('descriptions'))
                                        <div class="text-danger" role="alert">{{ $errors->first('descriptions') }}</div>
                                    @endif
                                </div>
                                {{-- <div class="col-xl-12  col-md-6 col-sm-12 py-2">
                                    <label for="degree2">Image</label><br>
                                    @if ($category->image)
                                        <img src="{{ asset('storage/images/categories/' . $category->image) }}"
                                            height="150px" width="150px" alt="">
                                    @endif
                                    <br>
                                    <input class="form-control mt-xl-0 mt-3" name="image" type="file" />
                                    @if ($errors->has('image'))
                                        <div class="text-danger" role="alert">{{ $errors->first('image') }}
                                        </div>
                                    @endif
                                </div> --}}
                                {{-- <div class="col-xl-12  col-md-6 col-sm-12 py-2">
                                    <label for="degree2">Description</label>
                                    <textarea class="form-control" placeholder="Enter Description" rows="3" name="descriptions" minlength="3"
                                        maxlength="250">{{ old('descriptions', $category->descriptions) }}</textarea>
                                    @if ($errors->has('descriptions'))
                                        <div class="text-danger" role="alert">{{ $errors->first('descriptions') }}
                                        </div>
                                    @endif
                                </div> --}}
                            </div>

                            <input type="submit" class="btn btn-primary"
                                onclick="return confirm('Are you sure, you want to update?')">
                        </form>
                    </div>
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
