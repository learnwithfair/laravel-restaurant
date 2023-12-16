<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Upload Logo</h4>
        <hr><br><br>
        <form action="" class="forms-sample" id="add_logo" method='post' enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-form-label col-xl-3 col-md-3 col-sm-12">Logo</label>

                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="file" name="logo" id="logo" accept="image/png,image/jpg,image/jpeg"
                        class="file-upload-default">
                    <div class="input-group">
                        <input type="text" class="file-upload-info form-control" disabled placeholder="Upload Logo">
                        <span class="input-group-append">
                            <button type="button"
                                class="form-control file-upload-browse btn btn-success btn-icon-text">
                                <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                        </span>

                    </div>
                    <span class="text-danger" id="addLogoError"></span>

                </div>
            </div>
            <br><br>
            <div id="addLogobtn" class="me-2 float-right">
                <button type="submit" class="btn btn-primary">submit</button>
            </div>

        </form>
    </div>
</div>
