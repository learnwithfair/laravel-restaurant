<script>
    $(document).ready(function() {
        // Delete section start
        $(document).on('click', '.delete_data', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#delete_id').val();
            let type = $('#delete_type').val();
            $('#delete_modal_clear')[0].reset();

            //Delete Admin Start
            if (type == "delete_admin") {
                var url = "{{ route('all-admin-details.destroy', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: "delete",
                    dataType: "json",
                    url: url,
                    success: function(res) {
                        if (res.status == 'success') {
                            $('.reloadAdminTable').load(location.href +
                                ' .reloadAdminTable');
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
            //Delete Admin End
        });
        //Delete section end

        // Update section start
        $(document).on('click', '.admin_status', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $('#admin_status_id').val();
            let usertype;
            let as_admin = document.getElementById('as_admin');
            if (as_admin.checked == true) {
                usertype = 2;
            } else {
                usertype = $('#status').val();
            }

            var url = "{{ route('all-admin-details.update', ':id') }}";
            url = url.replace(':id', id);
            $('#admin_status_modal_clear')[0].reset();
            $.ajax({
                type: "put",
                dataType: "json",
                data: {
                    usertype: usertype,
                },
                url: url,
                success: function(res) {

                    if (res.status == 'success') {
                        $('.reloadAdminTable').load(location.href +
                            ' .reloadAdminTable');
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
        // Update section end


        // Admin View start
        $(document).on('click', '.view-admin-password', function(e) {
            e.preventDefault();
            $('.modal-busy').show();
            let id = $(this).data('id');
            let authid = $(this).data('authid');
            let authtype = $(this).data('authtype');
            let type = $(this).data('type');
            //View Admin Info Into Modal Start
            var url = "{{ route('all-admin-details.show', ':id') }}";
            url = url.replace(':id', id);
            if (type == "view_password") {
                $.ajax({
                    type: "get",
                    dataType: "json",
                    url: url,
                    success: function(res) {

                        $('#admin_password_view').html('');
                        $('#admin_date_view').text('');
                        if (res.usertype == 0 || authid == res.id || authtype == 2) {
                            $('#admin_password_view').html('<p class="form-control pt-3 pb-3" \
                                    style="overflow:auto;height:70px;">' + res.password + '</p>');
                        } else {
                            $('#admin_password_view').html(
                                '<p class="form-control p-3 pb-4 text-danger">Not Allowed</p>'
                            );
                        }

                        let img = res.image;
                        let fulldate = res.created_at;
                        const date = fulldate.split("T");
                        const time = date[1].split(".");
                        $('#admin_date_view').text(date[0] + ' (' + time[0] + ')');
                        if (img == null) {
                            $('#admin_image_view').html('<img src="' + res
                                .profile_photo_url + '" >');
                        } else {
                            let path = "/storage/profileImages/" + img;
                            $('#admin_image_view').html('<img src="' + path + '" >');
                        }
                        $('.modal-busy').hide();
                    }
                });
            }
            //View Admin Info Into Modal Start
        });
        //Admin View end
    });
</script>
