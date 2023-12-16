<div class="col-xl-4 col-md-8 col-sm-12 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body" id="">
            <center style="margin-bottom:-15px"><a href="{{ route('hero-area') }}" style="color:white" class=""><i
                        class="mdi mdi-autorenew p-2 rounded-circle bg-black"></i></a></center>
            <h4 class="card-title">Home Slider &nbsp;&nbsp; </h4>

            <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel reloadSlider"
                id="owl-carousel-basic">

                @foreach ($sliderImages as $sliderImage)
                    <div class="item">
                        @php
                            $date = $sliderImage->created_at;
                            $date = Carbon\Carbon::parse($date);
                            $elapsed = $date->diffForHumans();
                        @endphp
                        <img src="{{ asset("uploads/slider/$sliderImage->image") }}" alt="">
                        <br>
                        <div class="row">
                            <div class="col-10">
                                <p class="text-muted text-small inline">{{ $elapsed }}</p>

                            </div>
                            <div class="col-2">
                                <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <input type="hidden" value="{{ $sliderImage->id }}" id="deleteSliderId"> --}}
                                    <a class="text-danger deletebtn" style="cursor: pointer"
                                        data-id={{ $sliderImage->id }} data-type="delete_slider" data-toggle="modal"
                                        data-target="#deletemodal">
                                        <li class="fas fa-trash-alt"></li>
                                    </a>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <hr>
            <div class="d-flex py-4">
                <div class="preview-list w-100">
                    <div class="preview-item p-0">
                        <div class="preview-thumbnail ">
                            <img src="{{ asset('backend/assets/images/faces/face12.jpg') }}"
                                class="rounded-circle border-1" alt="">
                        </div>
                        @foreach ($sliderDetails as $sliderDetail)
                            <div class="preview-item-content d-flex flex-grow ">
                                <div class="flex-grow reload-slide-details-preview">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                        <h6 class="preview-subject">{{ $sliderDetail->title }}</h6>
                                    </div>
                                    <p class="text-muted">{{ $sliderDetail->description }}</p>
                                </div>
                            </div>
                        @break
                    @endforeach
                </div>
            </div>
        </div>
        <p class="text-muted">Well, it seems to be working now. </p>
        <div class="progress progress-md portfolio-progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
