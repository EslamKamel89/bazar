<?php

use App\Http\Controllers\ProductShowController;
use App\Livewire\Homepage;
use App\Livewire\Product\ProductShow;
use Illuminate\Support\Facades\Route;

//? Breeze
Route::view( 'dashboard', 'dashboard' )
	->middleware( [ 'auth', 'verified' ] )
	->name( 'dashboard' );

Route::view( 'profile', 'profile' )
	->middleware( [ 'auth' ] )
	->name( 'profile' );

require __DIR__ . '/auth.php';

//? App Routes
Route::get( '/', Homepage::class)->name( 'home' );
Route::get( '/products/{product:slug}', ProductShow::class);

