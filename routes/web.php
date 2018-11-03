<?php

// -----------------------------------------------------------------
// I'll only need one web route to serve the master template
//
// This also disables laravel 404 detector while allowing api
// routes to continue to work
//
Route::get('{path}', function () {return view('master'); })->where( 'path', '([A-z\d-\/_.]+)?' );

