<!-- jQuery -->
<script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('frontend/assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('frontend/assets/js/accordions.js') }}"></script>
<script src="{{ asset('frontend/assets/js/datepicker.js') }}"></script>
<script src="{{ asset('frontend/assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/imgfix.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
<script src="{{ asset('frontend/assets/js/lightbox.js') }}"></script>
<script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>

<!-- Global Init -->
<script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
<script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
<!-- Start  js for Bootsrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- End  js for Bootsrap -->

{{-- For ajax  --}}
@include('frontend.ajax.masterAjax')
<!-- start  js for datatable -->
<script src=" https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
<!-- End  js for datatable -->
