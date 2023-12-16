<?php

namespace App\Http\Controllers\Backend\Logo;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
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
        $request->validate( [
            'logo' => 'required',
            // 'logo' => 'required|max:255', (For maximum 255 kilobyte)
        ], [
            'logo.required' => "Image must be filled up!",
        ] );
        $image = $request->file( 'logo' );
        // $imageName = 'UIMG_' . date( 'Ymd' ) . uniqid() . '.jpg';
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move( 'uploads/logo', $imageName );
        $data['image'] = $imageName;
        $add           = Logo::create( $data );
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {

        if ( $request->status == 1 || $request->status == 2 ) {
            Logo::where( 'status', $request->status )->update( [
                'status' => 0,
            ] );
        }
        if ( $request->status == -1 ) {
            $update = Logo::findOrFail( $id )->update( [
                'status' => 0,
            ] );
        } else {
            $update = Logo::findOrFail( $id )->update( [
                'status' => $request->status,
            ] );
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $path = 'uploads/logo/';
        $data = Logo::find( $id );

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
