<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function messageArea()
    {
        $messageInfo = array();
        $messages    = Message::limit( 3 )->orderBy( 'id', 'DESC' )->get();
        $unread      = Message::where( 'read_at', 0 )->count();
        array_push( $messageInfo, $messages );
        array_push( $messageInfo, $unread );
        return $messageInfo;
    }

    public function redirect()
    {
        if ( Auth::id() ) {
            if ( Auth::user()->usertype == 1 || Auth::user()->usertype == 2 ) {
                $messageInfo = $this->messageArea();
                return redirect()->route( 'dashboard', compact( 'messageInfo' ) );
            } else {
                return redirect()->route( 'home' );
            }
        } else {
            return redirect()->route( 'home' );
        }
    }
}
