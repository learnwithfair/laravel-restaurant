<?php

namespace App\Http\Controllers\Frontend\MessagesFrontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessagesFormRequest;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageStoreController extends Controller
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
    public function store( MessagesFormRequest $request )
    {
        $request->validated();

        $data['authId']  = Auth::user()->id;
        $data['name']    = $request->name;
        $data['tableNo'] = $request->tableNo;
        $data['phone']   = $request->phone;
        $data['guest']   = $request->guest;
        $data['date']    = $request->date;
        $data['time']    = $request->time;
        $data['comment'] = $request->comment;
        $add             = Message::create( $data );

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
        //
    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy( $id )
    {
        //
    }
}
