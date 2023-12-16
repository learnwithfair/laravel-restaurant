<!-- Database Connect Start -->
@include('backend.database.connection')
<!-- Database Connect Start End -->
@php
    //Database Connection
    $obj = new DatabaseConnection(); // create class
    $logo = $obj->HeaderLogo(); //Get Header Logo
    // $title = $obj->websiteTitle(); //Get Website title
@endphp

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="description" content="For Restaurant Management">
<meta name="keywords" content="Rahatul Rabbi, Rahatul, Rabbi, Rahatul-Rabbi, Rahatul_Rabbi, MD RAHATUL RABBI">
<meta name="author" content="MD RAHATUL RABBI">
@isset($logo[0])
    <link rel="shortcut icon" href="{{ asset('uploads/logo/' . $logo[0]->image) }}" type="image/x-icon">
@endisset
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="csrf-token" content="{{ csrf_token() }}">


<title>{{ config('app.name', 'Laravel') }}@yield('title')</title>

<!-- For Logout -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/css/vendor.bundle.base.css') }}">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
<!-- End plugin css for this page -->

<!-- For Multiple Select -->
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/select2/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
<!-- End layout styles -->

<!-- Switch styles start -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/switch.css') }}">
<!-- Switch styles End-->

{{-- Font ajax --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- start  js for datatable -->
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
<!-- end  js for datatable -->

{{-- Custom Style Start --}}
<link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
{{-- Custom Style End --}}
