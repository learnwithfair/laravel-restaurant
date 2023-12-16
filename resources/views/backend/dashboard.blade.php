@extends('backend.layout.master')
@section('title')
    || Dashboard
@endsection
@section('content')
    @include('backend.layout._dashboard')
@endsection

@section('script')
    @include('backend.layout._script')
@endsection
