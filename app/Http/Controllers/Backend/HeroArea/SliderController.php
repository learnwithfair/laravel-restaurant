<?php

namespace App\Http\Controllers\Backend\HeroArea;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $homeSlider    = Slider::get();
        // $sliderDetails = SliderDetails::get();
        // return view( 'frontend.index', compact( 'homeSlider', 'sliderDetails' ) );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $request->validate( [
            'slider_img' => 'required',
            // 'slider_img' => 'required|max:255', (For maximum 255 kilobyte)
        ], [
            'slider_img.required' => "Image must be filled up!",
        ] );
        $image = $request->file( 'slider_img' );
        // $imageName = 'UIMG_' . date( 'Ymd' ) . uniqid() . '.jpg';
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move( 'uploads/slider', $imageName );
        $data['image'] = $imageName;
        $add           = Slider::create( $data );
        if ( $add ) {
            return response()->json( ['status' => "success"] );
        } elseif ( !$add ) {
            return response()->json( ['status' => "error"] );
        } else {
            return response()->json( $add );
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show( Slider $slider )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit( Slider $slider )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, Slider $slider )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $path = 'uploads/slider/';
        $data = Slider::find( $id );

        $oldPicture = $data->image;
        if ( $oldPicture != '' ) {
            if ( File::exists( public_path( $path . $oldPicture ) ) ) {
                File::delete( public_path( $path . $oldPicture ) );
            }
        }
        $delete = $data->delete();

        if ( $delete ) {
            return response()->json( ['status' => "success"] );
        } elseif ( !$delete ) {
            return response()->json( ['status' => "error"] );
        } else {
            return response()->json( $delete );
        }

    }

}
