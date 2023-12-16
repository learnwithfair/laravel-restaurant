<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('backend.layout._head')
</head>

<body onload="preloaderFunction()">

    <div class="container-scroller">
        <!-- Preloader Start -->
        @include('backend.layout.modal._preloader')
        <!-- Preloader End -->

        <!--Tosh start -->
        @include('backend.layout.tosh')

        <!-- Tosh End -->
        <!-- Side nav start -->

        @include('backend.layout._sidenav')
        <!-- Side nav End -->

        <div class="container-fluid page-body-wrapper">

            <!-- Top nav start -->
            @include('backend.layout.topnav')
            <!-- Top nav End -->

            <!-- Dashboard start -->
            <div class="main-panel">
                @yield('content')
                <!--Footer Start -->
                @include('backend.layout._footer')

                <!--Custom Scrollbar Start -->
                @include('scrollbar._scrollbar')
                <!--Custom Scrollbar End -->

                <!-- Footer End-->
            </div>
            <!-- Dashboard End -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- Modal Start -->
    @yield('modal')
    <!-- Modal End -->

    <!-- Script Start -->
    @yield('script')
    {{-- @include('backend.layout._script') --}}
    <!-- Script End -->

    <!-- Custom Spinner Start -->
    @include('backend.layout.modal._spinner')
    <!-- Custom Spinner End -->

</body>

</html>
