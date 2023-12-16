<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Slider Details</h4>
        <hr>
        @foreach ($sliderDetails as $sliderDetails)
            {{-- {{ route('store-slide-details.update', $sliderDetails->id) }} --}}
            <form action="" class="forms-sample reload-slide-details" method='post' enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" value="{{ $sliderDetails->id }}" id="slidedetailsid">
                <div class="form-group row">
                    <label for="title" class="col-form-label col-sm-12 col-md-3 col-xl-12">Title</label>
                    <div class="col-sm-12 col-md-9 col-xl-12 ">
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ $sliderDetails->title }}" required>
                        <span class="text-danger" id="titleError"> </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-form-label col-sm-12 col-md-3 col-xl-12">Descrption</label>
                    <div class="col-sm-12 col-md-9 col-xl-12 ">
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ $sliderDetails->description }}" required>
                        <span class="text-danger" id="descriptionError"> </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="buttontext" class="col-form-label col-sm-12 col-md-3 col-xl-12">Button
                        Text</label>
                    <div class="col-sm-12 col-md-9 col-xl-12 ">
                        <input type="text" class="form-control" id="buttontext" name="buttontext"
                            value="{{ $sliderDetails->buttontext }}" required>
                        <span class="text-danger" id="buttontextError"> </span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="buttonlink" class="col-form-label col-sm-12 col-md-3 col-xl-12">Button
                        Link</label>
                    <div class="col-sm-12 col-md-9 col-xl-12 ">
                        <input type="url" class="form-control" id="buttonlink" name="buttonlink"
                            value="{{ $sliderDetails->buttonlink }}" required>
                        <span class="text-danger" id="buttonlinkError"> </span>
                    </div>
                </div>
                <br>
                <div id="slider_details_update_btn" class=" me-2 float-right">
                    <button type="button" class="btn btn-primary update_slider_details">Update</button>
                </div>

            </form>
        @break
    @endforeach
</div>
