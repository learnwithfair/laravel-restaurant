{{-- For AJAX  --}}
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

{{-- For Alert  --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('backend.layout.modal._success_modal')
@include('backend.layout.modal._upload_modal')
@include('backend.layout.modal._update_modal')
@include('backend.layout.modal._error_modal')
@include('backend.layout.modal._delete_modal')
@include('backend.layout.modal._loaded_modal')
{{-- For SearchBar  --}}
@include('backend.ajax._searchbar')


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        }
    })
</script>
