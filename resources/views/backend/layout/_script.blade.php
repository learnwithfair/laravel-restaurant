<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('backend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('backend/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('backend/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/assets/js/misc.js') }}"></script>
<script src="{{ asset('backend/assets/js/hoverable-collapse.js') }}"></script>

<script src="{{ asset('backend/assets/js/settings.js') }}"></script>
<script src="{{ asset('backend/assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('backend/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('backend/assets/js/chart.js') }}"></script>
<!-- End custom js for this page -->

<!-- For Multiple Select -->
<script src="{{ asset('backend/assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/file-upload.js') }}"></script>
<script src="{{ asset('backend/assets/js/typeahead.js') }}"></script>
<script src="{{ asset('backend/assets/js/select2.js') }}"></script>
<!-- For Multiple Select -->


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
@include('backend.ajax.masterAjax')
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
