@extends('frontend.layout.master')
@section('modal')
    <!-- Custom Spinner Start -->
    @include('backend.layout.modal._spinner')
    <!-- Custom Spinner End -->
@endsection
@section('script')
    <!-- ***** Script Start ***** -->
    @include('frontend.layout._script')
    <!-- ***** Script End  ***** -->
    @include('frontend.ajax._messageJS')
@endsection
