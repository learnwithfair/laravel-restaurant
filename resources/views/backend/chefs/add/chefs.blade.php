@extends('backend.layout.master')
@section('title')
    || Chefs || Add-Chefs
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Add Chefs Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('add-chefs') }}">Chefs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Chefs</li>
                </ol>
            </nav>
        </div>
        <div class="row">

            <div class="col-xl-8 col-md-8 col-sm-6 grid-margin stretch-card">
                @include('backend.chefs.add._add_chefs')
            </div>

            <div class="col-xl-4 col-md-4 col-sm-6 grid-margin stretch-card">
                @include('backend.chefs.add._slider_chefs')
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
