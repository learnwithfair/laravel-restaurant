@extends('backend.layout.master')
@section('title')
    || Hero-Area
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Hero Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('hero-area') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hero-Area</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            @include('backend/hero-area/_sliders')
        </div>
        <div class="col-md-4 col-xl-4 col-sm-6 grid-margin stretch-card">
            @include('backend/hero-area/_upload_image')
        </div>
        <div class="col-md-12 col-xl-4 col-sm-6 grid-margin stretch-card">
            @include('backend/hero-area/_sliders_details')
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
