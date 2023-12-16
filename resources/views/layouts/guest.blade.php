<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('backend.layout._head')
    <style>
        label,
        p {
            color: white;
        }
    </style>

    {{-- For Login & Registration End --}}

    {{-- Start For Get Logo in Forgot page Reset Page --}}
    @php
        $obj = new DatabaseConnection(); // create class
        $logo = $obj->FooterLogo(); //Get Footers Logo
        if (isset($logo[0])) {
            session()->flash('logo', $logo[0]->image);
        }
        
    @endphp
    {{-- End For Get Logo in Forgot page Reset Page --}}
</head>

<body onload="preloaderFunction()" class="auth login-bg">
    <!-- Preloader Start -->
    @include('backend.layout.modal._preloader')
    <!-- Preloader End -->
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>


</body>

<!-- endinject -->
@include('backend.layout._script')
@include('backend.ajax._login_registerJS')

</html>
