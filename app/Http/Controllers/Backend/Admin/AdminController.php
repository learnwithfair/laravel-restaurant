<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function messageArea()
    {
        $messageInfo = array();
        $messages    = Message::limit( 3 )->orderBy( 'id', 'DESC' )->get();
        $unread      = Message::where( 'read_at', 0 )->count();
        array_push( $messageInfo, $messages );
        array_push( $messageInfo, $unread );
        return $messageInfo;
    }

    public function index()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            $adminDetails = User::get();
            $messageInfo  = $this->messageArea();
            return view( 'backend.admin.index', compact( 'adminDetails', 'messageInfo' ) );
        } else {
            return redirect()->route( 'home' );

        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            $adminDetails = User::find( $id );
            if ( $adminDetails ) {
                return response()->json( $adminDetails );
            }
        } else {
            return redirect()->route( 'home' );

        }

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
        $update = User::findOrFail( $id )->update( [
            'usertype' => $request->usertype,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $path       = 'storage/profileImages/';
        $data       = User::find( $id );
        $oldPicture = $data->image;
        if ( $oldPicture != '' ) {
            if ( File::exists( public_path( $path . $oldPicture ) ) ) {
                File::delete( public_path( $path . $oldPicture ) );
            }
        }

        $messageData = Message::where( 'authId', $id )->get();
        if ( isset( $messageData ) ) {
            Message::where( 'authId', $id )->delete();
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
