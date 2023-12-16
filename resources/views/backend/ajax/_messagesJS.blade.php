<script>
    // Function For Reload Message Table
    function messagesReload() {
        $('.reloadmessagesTable').load(location.href +
            ' .reloadmessagesTable');
        $('.reloadmessagesNoticeTable').load(location.href +
            ' .reloadmessagesNoticeTable');
    }

    $(document).ready(function() {
        // Delete section start
        $(document).on('click', '.delete_data', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#delete_id').val();
            let type = $('#delete_type').val();
            $('#delete_modal_clear')[0].reset();

            //Delete Messages Start
            if (type == "delete_message") {
                var url = "{{ route('messages-read.destroy', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: "delete",
                    dataType: "json",
                    url: url,
                    success: function(res) {
                        if (res.status == 'success') {
                            messagesReload();
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
            //Delete Messages End
        });
        //Delete section end

        // Update section start
        $(document).on('click', '#message_status', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let status = $(this).data('status');
            let action = "status";
            var url = "{{ route('messages-read.update', ':id') }}";
            url = url.replace(':id', id);
            $.ajax({
                type: "put",
                dataType: "json",
                data: {
                    status: status,
                    action: action,
                },
                url: url,
                success: function(res) {

                    if (res.status == 'success') {
                        messagesReload()
                        updateModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }

                },
                error: function(err) {
                    errorModal();


                }
            });


        });
        // Update section end


        // Description View start

        $(document).on('click', '.view-description', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let name = $(this).data('name').replaceAll('__', ' ');
            let description = $(this).data('description').replaceAll('__', ' ');
            let image = $(this).data('image');
            let type = $(this).data('type');
            let reat_at = $(this).data('read_at');
            let action = "read_at";
            //Show Description Start
            if (type != 1) {
                let path = "https://ui-avatars.com/api/?name=" +
                    name + "&background=random&rounded=true&size=90";
                $('#message_image_view').html('<img src="' +
                    path + '" >');
            } else {
                let path = "/storage/profileImages/" + image;
                $('#message_image_view').html('<img src="' + path + '" >');
            }
            $('#message_desc_view').html(
                '<p class="form-control pt-3 pb-3" \
                                    style="overflow:auto;text-align:justify;height:auto;max-height:120px;line-height:22px;">' +
                description + '</p>');
            //Show Description End
            console.log(reat_at);
            //View Description Into Modal Start
            var url = "{{ route('messages-read.update', ':id') }}";
            url = url.replace(':id', id);
            if (reat_at == 0) {
                $.ajax({
                    type: "put",
                    dataType: "json",
                    data: {
                        action: action,
                    },
                    url: url,
                    success: function(res) {
                        messagesReload();
                    }
                });
            }
            //View Description Into Modal Start





        });
        ///      
        //Description View end
    });
</script>
