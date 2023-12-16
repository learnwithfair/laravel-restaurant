<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} || Profile</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('backend/assets/admin/ijaboCropTool.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/admin/style.css') }}">
    <!-- Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    @include('frontend.layout._head')

</head>

<body class="font-sans antialiased" onload="preloaderFunction()">
    <!-- Preloader Start -->
    @include('backend.layout.modal._preloader')
    <!-- Preloader End -->
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
        {{-- @livewire('navigation-menu') --}}
        @if (Auth::user()->usertype == 1 || Auth::user()->usertype == 2)
            @include('backend.layout._head')
            <style>
                .header-sticky {
                    display: none;
                }
            </style>
            <!-- Side nav start -->
            @include('backend.layout._sidenav')
            <!-- Side nav End -->

            <div class="container-fluid">
                <!-- Top nav start -->
                @include('backend.layout.topnav')
            </div>
            @include('backend.layout._script')
        @else
            @extends('frontend.layout._header')
            @section('condition-header')
                @include('frontend.layout._headerProfile')
            @endsection
        @endif



        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-gray">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="card" style="margin-top:-15px; margin-bottom:-60px; background-color:black">
            {{ $slot }}
        </main>

        @include('frontend.layout._footer')


    </div>


    @stack('modals')

    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('backend/assets/admin/ijaboCropTool.min.js') }}"></script>
    {{-- @include('frontend.layout._script') --}}
</body>

</html>
