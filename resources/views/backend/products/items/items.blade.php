@extends('backend.layout.master')
@section('title')
    || Product || Add-Item
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Items Area </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Items-Area</li>
                </ol>
            </nav>
        </div>
        {{-- Body section --}}
        <div class="row">

            <div class="col-md-8 col-xl-8 col-sm-6 grid-margin stretch-card">
                @include('backend/products/items/add_items')
            </div>
            <div class="col-md-4 col-xl-4 col-sm-6 grid-margin stretch-card">
                @include('backend/products/items/recent_items')
            </div>
        </div>
    @endsection
    @section('modal')
        @include('backend.layout.modal._delete_confirm')
    @endsection
    @section('script')
        @include('backend.layout._script')
        @include('backend.ajax._productJS')
    @endsection
