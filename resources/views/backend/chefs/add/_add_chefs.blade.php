<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Add Chefs</h4>
        <hr>

        {{-- {{ route('store-slide-details.update', $sliderDetails->id) }} --}}
        <form action="" class="forms-sample reload-slide-details" method='post' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-form-label col-xl-3 col-md-3 col-sm-12">Name</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
                        required>
                    <span class="text-danger" id="nameError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-form-label col-xl-3 col-md-3 col-sm-12">Title</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title"
                        required>
                    <span class="text-danger" id="titleError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="fackbooklink" class="col-form-label col-xl-3 col-md-3 col-sm-12">Fackbook</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="url" class="form-control" id="fackbooklink" name="fackbooklink"
                        value="https://www.facebook.com/" placeholder="Enter Facebook Link" required>
                    <span class="text-danger" id="fackbooklinkError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="twiterlink" class="col-form-label col-xl-3 col-md-3 col-sm-12">Twiter</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="url" class="form-control" id="twiterlink" name="twiterlink"
                        value="https://www.twiter.com/" placeholder="Enter Twiter Link" required>
                    <span class="text-danger" id="twiterlinkError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="instagramlink" class="col-form-label col-xl-3 col-md-3 col-sm-12">Instagram</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="url" class="form-control" id="instagramlink" name="instagramlink"
                        value="https://www.instagram.com/" placeholder="Enter Instagram Link" required>
                    <span class="text-danger" id="instagramlinkError"> </span>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-form-label col-xl-3 col-md-3 col-sm-12">Images</label>

                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group">
                        <input type="text" class="file-upload-info form-control" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button type="button"
                                class="form-control file-upload-browse btn btn-success btn-icon-text">
                                <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                        </span>
                    </div>


                </div>
            </div>

            <br>
            <div id="slider_details_update_btn" class=" me-2 float-right">
                <button type="button" class="btn btn-primary update_slider_details">Submit</button>
            </div>

        </form>


    </div>
</div>
