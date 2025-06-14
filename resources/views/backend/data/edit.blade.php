@extends('backend.layouts.app')
@section('title', 'Edit Data - ' . $data->name)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                Edit Data
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Data</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="statbox widget box box-shadow col-xl-6">
                <div class="row m-0">
                    <div class="col-12">
                        <form class="mt-3" method="POST" action="{{ route('cms.data.update', $data->id) }}"
                            enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="form-group mb-3 row">
                                <div class="col-xl-12  col-md-6 col-sm-12">
                                    <label for="formGroupExampleInput">File</label>
                                    <input type="file" class="form-control" id="formGroupExampleInput" required
                                        name="filename">
                                    @if ($errors->has('filename'))
                                        <div class="text-danger" role="alert">{{ $errors->first('filename') }}</div>
                                    @endif
                                </div>
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
@endsection
