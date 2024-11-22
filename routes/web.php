<?php

use App\Livewire\Homepage;
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
Route::get( '/', Homepage::class);


