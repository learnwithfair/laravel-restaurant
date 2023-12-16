@extends('backend.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Update Chefs Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('manage-chefs') }}">Chefs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update-Chefs</li>
                </ol>
            </nav>
        </div>
        <div class="row">

            <div class="col-xl-8 col-md-8 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Update Chefs</h4>
                        <hr>

                        {{-- {{ route('store-slide-details.update', $sliderDetails->id) }} --}}
                        <form action="" class="forms-sample" method='post' enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row">
                                <label for="name" class="col-form-label col-sm-12 col-md-3 col-xl-12">Name</label>
                                <div class="col-sm-12 col-md-9 col-xl-12 ">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" required>
                                    <span class="text-danger" id="nameError"> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-form-label col-sm-12 col-md-3 col-xl-12">Title</label>
                                <div class="col-sm-12 col-md-9 col-xl-12 ">
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Title" required>
                                    <span class="text-danger" id="titleError"> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fackbooklink"
                                    class="col-form-label col-sm-12 col-md-3 col-xl-12">Fackbook</label>
                                <div class="col-sm-12 col-md-9 col-xl-12 ">
                                    <input type="url" class="form-control" id="fackbooklink" name="fackbooklink"
                                        value="https://www.facebook.com/" placeholder="Enter Facebook Link" required>
                                    <span class="text-danger" id="fackbooklinkError"> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="twiterlink" class="col-form-label col-sm-12 col-md-3 col-xl-12">Twiter</label>
                                <div class="col-sm-12 col-md-9 col-xl-12 ">
                                    <input type="url" class="form-control" id="twiterlink" name="twiterlink"
                                        value="https://www.twiter.com/" placeholder="Enter Twiter Link" required>
                                    <span class="text-danger" id="twiterlinkError"> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="instagramlink"
                                    class="col-form-label col-sm-12 col-md-3 col-xl-12">Instagram</label>
                                <div class="col-sm-12 col-md-9 col-xl-12 ">
                                    <input type="url" class="form-control" id="instagramlink" name="instagramlink"
                                        value="https://www.instagram.com/" placeholder="Enter Instagram Link" required>
                                    <span class="text-danger" id="instagramlinkError"> </span>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="file-upload-info form-control" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button type="button"
                                            class="form-control file-upload-browse btn btn-success btn-icon-text">
                                            <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                                    </span>
                                </div>
                            </div>

                            <br>
                            <div id="slider_details_update_btn" class=" me-2 float-right">
                                <button type="button" class="btn btn-primary update_slider_details">Update</button>
                            </div>

                        </form>


                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
@section('modal')
    @include('backend.layout.modal._delete_confirm')
@endsection
@section('script')
    @include('backend.layout._script')
    @include('backend.ajax._heroAreaJS')
@endsection
