<!DOCTYPE html>
<html lang="en">
<!-- ***** Head Start ***** -->

<head>
    @include('frontend.layout._head')
</head>
<!-- ***** Head end ***** -->

<body>
    <!-- ***** Preloader Start ***** -->
    @include('frontend.layout._preloader')
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @extends('frontend.layout._header')
    @section('condition-header')
        @include('frontend.layout._headerHome')
    @endsection
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @include('frontend.layout._homeSlider')
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    @include('frontend.layout._about')
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    @include('frontend.layout._menu')

    <!-- ***** Menu Area Ends ***** -->

    <!-- ***** Chefs Area Starts ***** -->
    @include('frontend.layout._chefs')
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    @include('frontend.layout._reservation')
    <!-- ***** Reservation Area Ends ***** -->

    <!-- ***** Food List Starts ***** -->
    @include('frontend.layout._foodList')
    <!-- ***** Food List  Ends ***** -->

    <!-- ***** Footer Start ***** -->
    @include('frontend.layout._footer')
    <!-- ***** Footer End  ***** -->
    @yield('modal')
    @yield('script')
</body>

</html>
