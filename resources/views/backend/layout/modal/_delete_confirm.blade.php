<div class="modal fade bd-example-modal-sm" id="deletemodal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content modal_icon">
            <form action="" method="post" id="delete_modal_clear">
                @csrf
                <div class="modal-title" id="exampleModalLongTitle">
                    <input type="hidden" name="delete_id" id="delete_id">
                    <input type="hidden" name="delete_type" id="delete_type">
                    <div align="middle">
                        <img src="{{ asset('backend/assets/icon/delete-icon.png') }}" alt="">
                    </div>
                    <br>
                    <h5>Do you want to Delete?</h5>
                    <div></div>
                    <div>You won't be able to recover it!!</div>
                    <br>
                </div>

                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="margin:0px 10px">Cancel</button>
                    <button type="submit" class="btn btn-danger delete_data" data-dismiss="modal"
                        style="margin:0px 10px">Delete</button>
                </div>
            </form>

        </div>
    </div>
</div>
{{-- For detele Confirm Modal  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $(document).on('click', '.deletebtn', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let type = $(this).data('type');
            $('#delete_id').val(id);
            $('#delete_type').val(type);
        });

    });
</script>
