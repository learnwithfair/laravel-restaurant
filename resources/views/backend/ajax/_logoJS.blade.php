<script>
    $(document).ready(function() {
        // Delete section start
        $(document).on('click', '.delete_data', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#delete_id').val();
            let type = $('#delete_type').val();
            $('#delete_modal_clear')[0].reset();
            //Delete Logo Start
            if (type == "delete_logo") {
                var url = "{{ route('logo-details.destroy', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: "delete",
                    dataType: "json",
                    url: url,
                    success: function(res) {
                        if (res.status == 'success') {
                            $('.reloadLogoTable').load(location.href + ' .reloadLogoTable');
                            $('.reload-logo-area').load(location.href +
                                ' .reload-logo-area');
                            deleteModal();
                        } else if (res.status == 'error') {
                            errorModal();
                        }
                        $('.modal-busy').hide();
                    },
                    error: function(err) {
                        errorModal();
                        $('.modal-busy').hide();
                    }
                });
            }
            //Delete Logo End
        });
        //Delete section end

        // Add Logo section start
        $('#add_logo').on('submit', function(e) {
            e.preventDefault();
            // let logo_img = $('#logo').val();
            spinner = loadedModal('Uploding');
            $('#addLogobtn').html(spinner);
            var url = "{{ route('logo-details.store') }}";
            $.ajax({
                type: "post",
                dataType: "json",
                data: new FormData(this),
                url: url,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 'success') {
                        $('#addLogobtn').load(location.href + ' #addLogobtn');
                        $('.reloadLogoTable').load(location.href +
                            ' .reloadLogoTable');
                        $('#add_logo')[0].reset();
                        $('#addLogoError').text('');
                        uploadModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('#addLogoError').text('');
                    $('#addLogoError').text(error.errors
                        .logo);
                    $('#addLogobtn').load(location.href + ' #addLogobtn');
                    errorModal();
                }
            });


        });
        // Add Logo Section end

        // Logo Update section start
        $(document).on('click', '.logo_status', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#logo_status_id').val();           
            let status = $("input:radio[name=location]:checked").val();          
            var url = "{{ route('logo-details.update', ':id') }}";
            url = url.replace(':id', id);
            $('#logo_status_modal_clear')[0].reset();
            $.ajax({
                type: "put",
                dataType: "json",
                data: {
                    status: status,
                },
                url: url,
                success: function(res) {
                    if (res.status == 'success') {
                        $('.reloadLogoTable').load(location.href +
                            ' .reloadLogoTable');
                        $('.reload-logo-area').load(location.href +
                            ' .reload-logo-area');
                        updateModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }
                    $('.modal-busy').hide();
                },
                error: function(err) {
                    errorModal();
                    $('.modal-busy').hide();

                }
            });


        });
        // Logo Update section end


    });
</script>
