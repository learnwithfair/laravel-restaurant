<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\SliderDetails;

class HomeController extends Controller
{
    public function index()
    {
        $homeSlider    = Slider::get();
        $sliderDetails = SliderDetails::get();
        return view( 'frontend.index', compact( 'homeSlider', 'sliderDetails', ) );
    }

    public function test()
    {
        $homeSlider    = Slider::get();
        $sliderDetails = SliderDetails::get();
        return view( 'frontend.ajax.ajax_test', compact( 'homeSlider', 'sliderDetails', ) );
    }
}
