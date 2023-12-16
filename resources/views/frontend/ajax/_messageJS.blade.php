<script>
    $(document).ready(function() {

        // // Add Messages section start  
        $('#contact').on('submit', function(e) {
            e.preventDefault();
            spinner = '<button class="comment_submit main-button-icon" type="button" disabled>\
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>\
                            Making A Reserva...\
                        </button>';
            $('#comment_submit_area').html(spinner);
            var url = "{{ route('reservation.store') }}";
            $.ajax({
                type: "post",
                dataType: "json",
                data: new FormData(this),
                url: url,
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.status == 'success') {
                        $('#contact')[0].reset();
                        $('#contact').load(location.href + ' #contact');
                        successModal();
                    } else if (res.status == 'error') {
                        errorModal();
                    }
                },
                error: function(err) {
                    let error = err.responseJSON;

                    $('#nameerror').text('');
                    $('#tableNoerror').text('');
                    $('#phoneerror').text('');
                    $('#guesterror').text('');
                    $('#dateerror').text('');
                    $('#timeerror').text('');

                    $('#nameerror').text(error.errors.name);
                    $('#tableNoerror').text(error.errors.tableNo);
                    $('#phoneerror').text(error.errors.phone);
                    $('#guesterror').text(error.errors.guest);
                    $('#dateerror').text(error.errors.date);
                    $('#timeerror').text(error.errors.time);
                    errorModal();
                    $('#comment_submit_area').load(location.href + ' #comment_submit_area');
                }
            });

        });
        // Add Messages section end
    });
</script>
