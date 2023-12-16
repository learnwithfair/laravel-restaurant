@extends('backend.layout.master')
@section('title')
    || Logo
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Logo Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('logo') }}">Logo</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Logo-area</li>
                </ol>
            </nav>

        </div>
        <div class="row">

            <div class="col-xl-6 col-md-6 col-sm-12 grid-margin stretch-card">
                @include('backend.logo._upload_logo')
            </div>

            <div class="col-xl-6 col-md-6 col-sm-12 grid-margin stretch-card">
                @include('backend.logo._manage_logo')
            </div>
        </div>

    </div>
@endsection
@section('modal')
    @include('backend.layout.modal._delete_confirm')
    @include('backend.logo._logo_change_status_modal')
@endsection
@section('script')
    @include('backend.layout._script')
    @include('backend.ajax._logoJS')
@endsection
