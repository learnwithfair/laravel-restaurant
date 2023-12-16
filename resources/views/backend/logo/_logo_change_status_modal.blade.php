<div class="modal fade bd-example-modal-sm" id="logoStatusmodal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content modal_icon">
            <form action="" method="post" id="logo_status_modal_clear">
                @csrf
                <div class="modal-title" id="exampleModalLongTitle">
                    <input type="hidden" name="logo_status_id" id="logo_status_id">
                    <input type="hidden" name="status" id="status">
                    <div align="middle">
                        <img src="{{ asset('backend/assets/icon/warning.png') }}" style="border-radius:unset;"
                            alt="">
                    </div>
                    <br>
                    <h5 id="logo_status_title"></h5>                    
                    <div class="form-group row"  id="logo-area">
                        <label class="col-4 col-form-label mt-2">Location : </label>
                        <div class="col-3">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="location"
                                id="location1" value="1" checked> H </label>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="location"
                                id="location2" value="2"> F </label>
                          </div>
                        </div>
                        <div class="col-2"></div>
                      </div>
                      <div id="break">
                        <br>
                      </div>
                </div>
                {{-- <br> --}}
                <div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="margin:0px 10px">No&nbsp;</button>
                    <button type="submit" class="btn btn-danger logo_status" data-dismiss="modal"
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
        $(document).on('click', '.change_logo_status', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            let status = $(this).data('status');
            let title = $(this).data('title');
            if (status == 0) {
                $('#logo-area').hide();
                $('#break').show();
                $('#location1').val(-1);
            } else {
                $('#logo-area').show();
                $('#break').hide();
                $('#location1').val(1);
            }
            $('#logo_status_id').val(id);
            $('#status').val(status);
            $('#logo_status_title').text(title);
        });
    });
</script>
