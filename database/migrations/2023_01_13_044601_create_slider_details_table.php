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
        Schema::create( 'slider_details', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'title' )->nullable();
            $table->string( 'description' )->nullable();
            $table->string( 'buttontext' )->nullable();
            $table->string( 'buttonlink' )->nullable();
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
        Schema::dropIfExists( 'slider_details' );
    }
};