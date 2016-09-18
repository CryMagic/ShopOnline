<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function getIndex()
    {
    	return "This is Index";
    }
    public function getCallView()
    {
    	return view('greeting');
    }
}
