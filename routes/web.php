<?php

// -----------------------------------------------------------------
// I'll only need one web route to serve the master template
Route::get('/', function(){return view('master'); });
