<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Image;

class PruebaController extends Controller
{
    public function index(){
    	return view('image.index');
    }

    public function uploadImage(Request $request){
		$img = Image::make($request->file('image'));
		dd($img);

    }
}
