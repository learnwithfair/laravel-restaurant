<?php

namespace App\Http\Controllers\Backend\HeroArea;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderDetailsFormRequest;
use App\Models\SliderDetails;
use Illuminate\Http\Request;

class SliderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SliderDetails  $sliderDetails
     * @return \Illuminate\Http\Response
     */
    public function show( SliderDetails $sliderDetails )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SliderDetails  $sliderDetails
     * @return \Illuminate\Http\Response
     */
    public function edit( SliderDetails $sliderDetails )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SliderDetails  $sliderDetails
     * @return \Illuminate\Http\Response
     */
    public function update( SliderDetailsFormRequest $request, $id )
    {
        $request->validated();

        $update = SliderDetails::findOrFail( $id )->update( [
            'title'       => $request->title,
            'description' => $request->description,
            'buttontext'  => $request->buttontext,
            'buttonlink'  => $request->buttonlink,
        ] );
        if ( $update ) {
            return response()->json( ['status' => "success"] );
        } elseif ( !$update ) {
            return response()->json( ['status' => "error"] );
        } else {
            return response()->json( $update );
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SliderDetails  $sliderDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy( SliderDetails $sliderDetails )
    {
        //
    }

}
