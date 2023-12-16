<?php

namespace App\Actions\Jetstream;

use App\Models\Message;
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete( $user )
    {
        // For Message Delete  Start
        $messageData = Message::where( 'authId', $user->id )->get();
        if ( isset( $messageData ) ) {
            Message::where( 'authId', $user->id )->delete();
        }
        // For Message Delete End
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();

    }
}
