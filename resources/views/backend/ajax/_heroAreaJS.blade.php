<script>
    $(document).ready(function() {
        // Delete section start
        $(document).on('click', '.delete_data', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#delete_id').val();
            let type = $('#delete_type').val();
            $('#delete_modal_clear')[0].reset();
            //Delete Slider Start
            if (type == "delete_slider") {
                var url = "{{ route('store-slide.destroy', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: "delete",
                    dataType: "json",
                    url: url,
                    success: function(res) {
                        if (res.status == 'success') {
                            $('.reloadSlider').load(location.href + ' .reloadSlider');
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
            //Delete Slider End
        });
        //Delete section end

        // Add Slider Image section start
        $('#add_slider_image').on('submit', function(e) {
            e.preventDefault();
            // let slider_img = $('#slider_img').val();
            spinner = loadedModal('Uploding');
            $('#addSliderImagebtn').html(spinner);
            var url = "{{ route('store-slide.store') }}";
            $.ajax({
                type: "post",
                dataType: "json",
                data: new FormData(this),
                url: url,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 'success') {
                        $('#addSliderImagebtn').load(location.href + ' #addSliderImagebtn');
                        $('#add_slider_image')[0].reset();
                        $('#addSlideImageError').text('');
                        uploadModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('#addSlideImageError').text('');
                    $('#addSlideImageError').text(error.errors
                        .slider_img);
                    $('#addSliderImagebtn').load(location.href + ' #addSliderImagebtn');
                    errorModal();
                }
            });


        });
        // Add Slider section end

        // Slider Details section start
        $(document).on('click', '.update_slider_details', function(e) {
            e.preventDefault();
            spinner = loadedModal('Updating');
            $('#slider_details_update_btn').html(spinner);
            let id = $('#slidedetailsid').val();
            let title = $('#title').val();
            let description = $('#description').val();
            let buttontext = $('#buttontext').val();
            let buttonlink = $('#buttonlink').val();
            var url = "{{ route('store-slide-details.update', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                type: "put",
                dataType: "json",
                data: {
                    title: title,
                    description: description,
                    buttontext: buttontext,
                    buttonlink: buttonlink
                },
                url: url,
                success: function(res) {

                    if (res.status == 'success') {
                        $('.reload-slide-details').load(location.href +
                            ' .reload-slide-details');
                        $('.reload-slide-details-preview').load(location
                            .href +
                            ' .reload-slide-details-preview');
                        updateModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }
                    $('#slider_details_update_btn').load(location
                        .href +
                        ' #slider_details_update_btn');
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('#titleError').text('');
                    $('#descriptionError').text('');
                    $('#buttontextError').text('');
                    $('#buttonlinkError').text('');
                    $('#titleError').text(error.errors.title);
                    $('#descriptionError').text(error.errors
                        .description);
                    $('#buttontextError').text(error.errors.buttontext);
                    $('#buttonlinkError').text(error.errors.buttonlink);

                    $('#slider_details_update_btn').load(location
                        .href +
                        ' #slider_details_update_btn');
                }
            });

        });
        // Slider Details section end
    });
</script>
