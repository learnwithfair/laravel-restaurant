<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        @foreach ($sliderDetails as $sliderDetails)
                            <h4>{{ $sliderDetails->title }}</h4>
                            <h6>{{ $sliderDetails->description }}</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="{{ $sliderDetails->buttonlink }}">{{ $sliderDetails->buttontext }}</a>
                            </div>
                        @break
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="main-banner header-text">
                <div class="Modern-Slider">
                    @foreach ($homeSlider as $slider)
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="uploads/slider/{{ $slider->image }}" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</div>
