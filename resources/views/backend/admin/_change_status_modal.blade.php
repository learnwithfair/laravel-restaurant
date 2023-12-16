<div class="modal fade bd-example-modal-sm" id="adminStatusmodal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content modal_icon">
            <form action="" method="post" id="admin_status_modal_clear">
                @csrf
                <div class="modal-title" id="exampleModalLongTitle">
                    <input type="hidden" name="admin_status_id" id="admin_status_id">
                    <input type="hidden" name="status" id="status">
                    <div align="middle">
                        <img src="{{ asset('backend/assets/icon/warning.png') }}" style="border-radius:unset;"
                            alt="">
                    </div>
                    <br>
                    <h5 id="admin_status_title"></h5>
                    <div></div>
                    <div id="admin_status_description"></div>
                    <div class="footer text-primary m-0 mb-3" style="margin-bottom:-25px !important;" align="left"
                        id="admin-area">
                        Set as a Admin : &nbsp;
                        <input type="checkbox" class="form-check-input bg-dark border border-white cursor-pointer"
                            value="2" id="as_admin">
                    </div>
                </div>
                <br>
                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="margin:0px 10px">No&nbsp;</button>
                    <button type="submit" class="btn btn-danger admin_status" data-dismiss="modal"
                        style="margin:0px 10px">Yes</button>
                </div>
            </form>

        </div>
    </div>
</div>
{{-- For detele Confirm Modal  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.change_admin_status', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let status = $(this).data('status');
            let title = $(this).data('title');
            let description = $(this).data('description');
            if (status == 0) {
                $('#admin-area').hide();
            } else {
                $('#admin-area').show();
            }
            $('#admin_status_id').val(id);
            $('#status').val(status);
            $('#admin_status_title').text(title);
            $('#admin_status_description').text(description);

        });
    });
</script>
