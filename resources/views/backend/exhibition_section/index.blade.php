@extends('backend.layouts.app')
@section('title', 'Gallery')
@section('content')
    <div class="row layout-top-spacing m-0 pa-padding-remove">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">

            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center mb-1 ">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <legend class="h4">
                                Galleries
                            </legend>
                        </div>

                        <div class="col-lg-8 col-md-12 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2 px-4 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Galleries</a></li>
                                </ol>
                            </nav>
                        </div>



                    </div>
                    <div class="row">
                        {{-- <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12 mb-2">
                            <div class="">
                                <form class="form-inline row px-4 pa_form_responsive" action="{{ route('backend.category.index') }}" method="GET">
                                    <input class="form-control form-control-sm pa_form_input" type="text"
                                        placeholder="Search By MRD/Name/Mobile" name="q"
                                        value="{{ request('q') ?? '' }}" minlength="3" maxlength="40">
                                    <input type="submit" value="Search" class="btn btn-success  ml-0 ml-lg-4 ml-md-4 ml-sm-4  search_btn_size pa_search_btn">
                                </form>
                                @if ($errors->has('q'))
                                    <div class="text-danger" role="alert">{{ $errors->first('q') }}
                                    </div>
                                @endif
                            </div>
                        </div> --}}
                        <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12 mb-2">
                        </div>

                        <div
                            class="align-items-center col-xl-5 col-lg-4 col-md-12 col-sm-12 d-flex justify-content-end row mb-2">
                            <a href="{{ route('cms.exhibition.media.create', $exhibitions->id) }}" name="txt"
                                class="btn btn-primary mt-2 ml-3 ">
                                Add New Gallery
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow temp-index">
                <div class="">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive min-height-20em">
                            <table class="table mb-4">
                                <thead>
                                    <tr>
                                        <th>Sr no.</th>
                                        <th>Image</th>
                                        {{-- <th>Image</th> --}}
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($medias as $media)
                                        <tr>
                                            <td>{{ tableRowSrNo($loop->index, $medias) }}</td>
                                            <td class="img-on-tab-style ">
                                                @if ($media->filename)
                                                    <img src="{{ asset('storage/images/medias/' . $media->filename) }}"
                                                        width="110px" height="110px">
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item"
                                                            href="{{ route('cms.exhibition.media.edit', ['exhibition_id' => $exhibitions->id, 'media_id' => $media->id]) }}">Edit
                                                        </a>

                                                        <a class="dropdown-item"
                                                            href="{{ route('cms.exhibition.media.delete', ['exhibition_id' => $exhibitions->id, 'media_id' => $media->id]) }}">
                                                            Delete
                                                        </a>
                                                    </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr class="text-md-center">
                                            <td colspan="3">No Records Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination col-lg-12 mt-3">
                            <div class=" text-center mx-auto">
                                <ul class="pagination text-center">
                                    {{ $medias->appends(Request::all())->links('pagination::bootstrap-4') }}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

@endsection
