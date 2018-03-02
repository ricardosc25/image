<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortadaController extends Controller
{
    public function index(){
    	return view('portada');
    }
}
