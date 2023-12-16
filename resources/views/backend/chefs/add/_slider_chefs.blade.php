<div class="card">
    <div class="card-body" id="">
        <center style="margin-bottom:-15px"><a href="{{ route('add-chefs') }}" style="color:white" class=""><i
                    class="mdi mdi-autorenew p-2 rounded-circle bg-black"></i></a></center>
        <h4 class="card-title">Chefs Slider &nbsp;&nbsp; </h4>

        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel reloadSlider"
            id="owl-carousel-basic">
            @php
                $sliderImages = [0, 1, 2, 3, 4, 5];
            @endphp
            @foreach ($sliderImages as $sliderImage)
                <div class="item">
                    @php
                        // $date = $sliderImage->created_at;
                        // $date = Carbon\Carbon::parse($date);
                        // $elapsed = $date->diffForHumans();
                    @endphp
                    <img src="{{ asset('uploads/slider/1675423945.jpg') }}" alt="">
                    <br>
                    <div class="row" align='center'>
                        <div class="col-4">
                            <a href="https://www.facebook.com/" class="text-danger" style="cursor: pointer">
                                <li class="fas fa-facebook"></li>
                            </a>

                        </div>
                        <div class="col-4">
                            <a href="https://www.twiter.com/" class="text-danger" style="cursor: pointer">
                                <li class="fas fa-twiter"></li>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.instagram.com/" class="text-danger" style="cursor: pointer">
                                <li class="fas fa-instagram"></li>
                            </a>
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
                        <img src="{{ asset('backend/assets/images/faces/face12.jpg') }}" class="rounded-circle border-1"
                            alt="">
                    </div>
                    {{-- @foreach ($sliderDetails as $sliderDetail) --}}
                    <div class="preview-item-content d-flex flex-grow ">
                        <div class="flex-grow reload-slide-details-preview">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                <h6 class="preview-subject">BestCafe</h6>
                            </div>
                            <p class="text-muted">THE BEST EXPERIENC</p>
                        </div>
                    </div>
                    {{-- @break --}}
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <p class="text-muted">Well, it seems to be working now. </p>
        <div class="progress progress-md portfolio-progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
