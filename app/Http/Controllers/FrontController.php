<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function cardiologos()
    {
    	return view('cardiologos');
    }

    public function neurologos()
    {
    	return view('neurologos');
    }

    public function nefrologos()
    {
    	return view('nefrologos');
    }

    public function ginecologos()
    {
    	return view('ginecologos');
    }

}
