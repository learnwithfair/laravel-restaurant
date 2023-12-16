<?php

// For Backend Start

use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\HeroArea\SliderController;
use App\Http\Controllers\Backend\HeroArea\SliderDetailsController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\Logo\LogoController;
use App\Http\Controllers\Backend\Messages\MessageReadController;

// For Backend End
// For Frontend Start
use App\Http\Controllers\Frontend\HomeController;
// For Frontend End
use App\Http\Controllers\Frontend\MessagesFrontend\MessageStoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
/*
|--------------------------------------------------------------------------
|                          Cache Clear Routes
|--------------------------------------------------------------------------
 */
Route::get( '/clear', function () {
    Artisan::call( 'optimize:clear' );
    return "
          events ..... DONE </br>
          views .......DONE </br>
          cache ...... DONE </br>
          route .......DONE </br>
          config ......DONE </br>
          compiled ....DONE </br>
        ";
} );
/*
|--------------------------------------------------------------------------
|                           Frontend Routes
|--------------------------------------------------------------------------
 */
// For Display Home Page
Route::get( '/test', [HomeController::class, 'test'] )->name( 'test' );
Route::get( '/', [HomeController::class, 'index'] )->name( 'home' );
Route::get( '/home', [HomeController::class, 'index'] )->name( 'home' );
// After Login
Route::get( '/redirect', [LoginController::class, 'redirect'] );

////
Route::resource( '/reservation', MessageStoreController::class );

/*
|--------------------------------------------------------------------------
|                Backend Routes For DELETE, UPDATE, UPLOAD
|--------------------------------------------------------------------------
 */

// For Upload, Update & Delete start
Route::middleware( [
    'auth:sanctum',
    config( 'jetstream.auth_session' ),
    'verified',
] )->prefix( '/admin' )->group( function () {
    Route::resource( '/store-slide', SliderController::class );
    Route::resource( '/store-slide-details', SliderDetailsController::class );
    Route::resource( '/all-admin-details', AdminController::class );
    Route::resource( '/logo-details', LogoController::class );
    Route::resource( '/messages-read', MessageReadController::class );
} );
// For Upload, Update & Delete End
/*
|--------------------------------------------------------------------------
|                    Backend Routes For Dashboard Display
|--------------------------------------------------------------------------
 */
// Display For Admin Start
Route::middleware( [
    'auth:sanctum',
    config( 'jetstream.auth_session' ),
    'verified',
] )->controller( BackendController::class )->prefix( '/admin' )->group( function () {
    Route::get( '/dashboard', 'index' )->name( 'dashboard' );

    // Custom Route For Backend
    Route::get( '/logo', 'logo' )->name( 'logo' );
    Route::get( '/hero-area', 'heroArea' )->name( 'hero-area' );
    Route::get( '/products', 'items' )->name( 'products' );
    Route::get( '/manage-items', 'manageItems' )->name( 'manageItems' );
    Route::get( '/add-chefs', 'addChefs' )->name( 'add-chefs' );
    Route::get( '/manage-chefs', 'manageChefs' )->name( 'manage-chefs' );
    Route::get( '/messages', 'messages' )->name( 'messages' );
    // For Profile Picture Update
    Route::post( '/change-profile-picture', 'updatePicture' )->name( 'adminPictureUpdate' );

} );
// Display For Admin End
