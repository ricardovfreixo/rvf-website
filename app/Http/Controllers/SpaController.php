<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function article($slug = false)
    {
    	$article = false;

		if($slug) $article = \App\Post::where('slug',$slug)->first();
    	
    	return $article;
    }
}
