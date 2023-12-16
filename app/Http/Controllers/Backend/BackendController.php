<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Message;
use App\Models\Slider;
use App\Models\SliderDetails;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BackendController extends Controller
{

    // public function messageArea()
    // {
    //     $messageInfo = array();
    //     $messages    = Message::limit( 3 )->orderBy( 'id', 'DESC' )->get();
    //     $unread      = Message::where( 'read_at', 0 )->count();
    //     array_push( $messageInfo, $messages );
    //     array_push( $messageInfo, $unread );
    //     return $messageInfo;
    // }

    public function index()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {

            return view( 'backend.dashboard' );
        } else {
            return redirect()->route( 'home' );
        }

    }

    public function logo()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {

            $logoInfo = Logo::limit( 3 )->orderBy( 'id', 'DESC' )->get();
            return view( 'backend.logo.logo', compact( 'logoInfo' ) );
        } else {
            return redirect()->route( 'home' );
        }

    }

    public function heroArea()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            $sliderImages  = Slider::get();
            $sliderDetails = SliderDetails::get();
            return view( 'backend.hero-area.create', compact( 'sliderImages', 'sliderDetails' ) );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function items()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            // $sliderImages  = Slider::get();
            // $sliderDetails = SliderDetails::get();

            return view( 'backend.products.items.items' );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function manageItems()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            // $sliderImages  = Slider::get();
            // $sliderDetails = SliderDetails::get();

            return view( 'backend.products.manage-items.manage_items' );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function addChefs()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            // $sliderImages  = Slider::get();
            // $sliderDetails = SliderDetails::get();

            return view( 'backend.chefs.add.chefs' );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function manageChefs()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            // $sliderImages  = Slider::get();
            // $sliderDetails = SliderDetails::get();

            return view( 'backend.chefs.manage.manage_chefs' );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function messages()
    {
        if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
            // $messageInfo = Message::orderBy( 'id', 'DESC' )->get();
            $messageInfo = Message::join( 'users', 'messages.authId', '=', 'users.id' )
                ->select( 'messages.*', 'users.name as userName', 'users.image as profileImage' )
                ->orderBy( 'messages.id', 'DESC' )
                ->get();
            return view( 'backend.messages.messages', compact( 'messageInfo' ) );
        } else {
            return redirect()->route( 'home' );

        }

    }

    public function updatePicture( Request $request )
    {
        $path     = 'storage/profileImages/';
        $file     = $request->file( 'admin_image' );
        $new_name = 'UIMG_' . date( 'Ymd' ) . uniqid() . '.jpg';

        //Upload new image
        $upload = $file->move( public_path( $path ), $new_name );

        if ( !$upload ) {
            return response()->json( ['status' => 0, 'msg' => 'Something went wrong, upload new picture failed.'] );
        } else {
            //Get Old picture

            // $oldPicture = User::find( Auth::user()->id )->getAttributes()['picture'];
            $oldPicture = Auth::user()->image;

            if ( $oldPicture != '' ) {
                if ( File::exists( public_path( $path . $oldPicture ) ) ) {
                    File::delete( public_path( $path . $oldPicture ) );
                }
            }

            //Update DB
            $update = User::find( Auth::user()->id )->update( ['image' => $new_name] );

            if ( !$upload ) {
                return response()->json( ['status' => 0, 'msg' => 'Something went wrong, updating picture in db failed.'] );
            } else {
                return response()->json( ['status' => 1, 'msg' => 'Your profile picture has been updated successfully'] );
            }
        }
    }

}
