<?php

namespace App\Http\Controllers\Backend\Messages;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageReadController extends Controller
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
        $update = Message::where( [
            ['id', $id],
            ['read_at', 0],
        ] )->update( [
            'read_at' => 1,
        ] );
        return redirect()->route( 'messages' );
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
        $action = $request->action;

        // For Read Messages
        if ( $action == "read_at" ) {
            $update = Message::where( [
                ['id', $id],
                ['read_at', 0],
            ] )->update( [
                'read_at' => 1,
            ] );

        }
        // For Status Messages
        elseif ( $action == "status" ) {
            $check = $request->status;
            if ( $check == 0 ) {
                $status = 1;
            } elseif ( $check == 1 ) {
                $status = 2;
            } else {
                $status = 0;
            }
            $update = Message::findOrFail( $id )->update( [
                'status' => $status,
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

        $delete = Message::find( $id )->delete();

        if ( $delete ) {
            return response()->json( ['status' => "success"] );
        } elseif ( !$delete ) {
            return response()->json( ['status' => "error"] );
        } else {
            return response()->json( $delete );
        }

    }
}
