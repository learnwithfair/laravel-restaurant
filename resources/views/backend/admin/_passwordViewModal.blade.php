<div class="modal fade bd-example-modal-md" id="view_admin_password_modal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content modal_icon" style="text-align: left">
            <form action="" method="post" id="">
                @csrf
                <div class="modal-title" id="exampleModalLongTitle">
                    <div align="middle" class="mt-2 mb-4" id="admin_image_view">
                        <img src="" class="border border-danger" alt="">
                    </div>
                    <hr>
                    <div></div>
                    <div class="row">
                        <div class="form-group">
                            <label for="">
                                Password:
                            </label>

                            <div id="admin_password_view">
                                {{-- <p class="form-control pt-3 pb-3" id="admin_password_view"
                                    style="overflow:auto;height:70px;"></p> --}}
                            </div>



                        </div>
                        <div class="form-group">
                            <label for="">
                                Joining Date:
                            </label>
                            <p class="form-control" id="admin_date_view"></p>
                        </div>
                    </div>
                    <br>
                </div>
                <div align="middle">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                        style="margin:0px 10px">Close</button>
                </div>
            </form>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
