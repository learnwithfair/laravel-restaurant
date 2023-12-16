<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
/**
 * Run the migrations.
 *
 * @return void
 */
    function up()
    {
        Schema::create( 'messages', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'authId' );
            $table->string( 'name' );
            $table->string( 'tableNo' )->nullable();
            $table->string( 'phone' );
            $table->string( 'guest' )->nullable();
            $table->string( 'date' );
            $table->string( 'time' );
            $table->string( 'comment' )->nullable();
            $table->string( 'read_at' )->default( 0 );
            $table->string( 'status' )->default( 0 );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    function down()
    {
        Schema::dropIfExists( 'messages' );
    }
};
