<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($value='')
    {
    	return view ('frontend.mainpage');
    }
    public function service($value='')
    {
    	return view ('frontend.service');
    }
    public function shop($value='')
    {
    	return view ('frontend.shop');
    }
    public function contact($value='')
    {
    	return view ('frontend.contact');
    }
    public function about($value='')
    {
    	return view ('frontend.about');
    }
}
