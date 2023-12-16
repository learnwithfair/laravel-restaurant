<style>
    #message_image_view>img {
        height: 90px;
        width: 90px;
    }
</style>
<div class="modal fade bd-example-modal-md" id="message_view_modal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content modal_icon" style="text-align: left">
            <form action="" method="post" id="">
                @csrf
                <div class="modal-title" id="exampleModalLongTitle">
                    <div align="middle" class="mt-2 mb-4" id="message_image_view">
                        <img src="" class="border border-danger" alt="">
                    </div>
                    <hr>
                    <div></div>
                    <div class="row">
                        <div class="form-group">
                            <label for="" class="mb-3">
                                Description:
                            </label>

                            <p id="message_desc_view">
                                {{-- <p class="form-control pt-3 pb-3" id="admin_password_view"
                                    style="overflow:auto;height:70px;"></p> --}}
                            </p>
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
<script>
    // $(document).ready(function() {
    //     $(document).on('click', '.view-description', function(e) {
    //         e.preventDefault();
    //         let name = $(this).data('name').replaceAll('__', ' ');
    //         let description = $(this).data('description').replaceAll('__', ' ');
    //         let image = $(this).data('image');
    //         let type = $(this).data('type');

    //         if (type != 1) {
    //             let path = "https://ui-avatars.com/api/?name=" +
    //                 name + "&background=random&rounded=true&size=90";
    //             $('#message_image_view').html('<img src="' +
    //                 path + '" >');
    //         } else {
    //             let path = "/storage/profileImages/" + image;
    //             $('#message_image_view').html('<img src="' + path + '" >');
    //         }
    //         $('#message_desc_view').html('<p class="form-control pt-3 pb-3" \
    //                                 style="overflow:auto;text-align:justify;height:120px;line-height:22px;">' +
    //             description + '</p>');



    //     });
    // });
</script>
