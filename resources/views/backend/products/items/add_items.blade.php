<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Add Items</h4>
        <hr>
        <form action="" class="forms-sample reload-slide-details" method='post' enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="title" class="col-form-label col-xl-3 col-md-3 col-sm-12">Title</label>
                <div class="col-xl-9 col-md-9 col-sm-12 ">
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Enter Item's Title" required>
                    <span class="text-danger" id="titleError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-form-label col-xl-3 col-md-3 col-sm-12">Descrption</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <textarea class="" name="description" id="description" rows="4"
                        placeholder="Write Item's Description Here.." required></textarea>
                    <span class="text-danger" id="descriptionError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="title" class="col-form-label col-xl-3 col-md-3 col-sm-12">Amount</label>
                <div class="col-xl-9 col-md-9 col-sm-12 ">
                    <div class="input-group">
                        <input type="number" class="form-control" id="amount" name="amount"
                            placeholder="Enter Amount in Taka" required>
                        <div class="input-group-append">
                            <span class="input-group-text form-control">TK</span>
                        </div>
                    </div>
                    <span class="text-danger" id="amountError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-form-label col-xl-3 col-md-3 col-sm-12">Category</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <select class="js-example-basic-multiple form-select" name="category" id="category"
                        multiple="multiple" style="width:100%;">
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="AM">America</option>
                        <option value="CA">Canada</option>
                        <option value="RU">Russia</option>
                    </select>
                    <span class="text-danger" id="categoryError"> </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-form-label col-xl-3 col-md-3 col-sm-12">Item Images</label>
                <div class="col-xl-9 col-md-9 col-sm-12">
                    <input type="file" name="image" id="image" class="file-upload-default">
                    <div class="input-group">
                        <input type="text" class="file-upload-info form-control" disabled
                            placeholder="Upload Item's Image">
                        <span class="input-group-append">
                            <button type="button"
                                class="form-control file-upload-browse btn btn-success btn-icon-text">
                                <i class="mdi mdi-upload btn-icon-prepend"></i> Upload </button>
                        </span>
                    </div>
                </div>
            </div>
            <br>
            <div id="add_items_btn" class=" me-2 float-right">
                <button type="button" class="btn btn-primary items_add">Submit</button>
            </div>
        </form>
    </div>
</div>
