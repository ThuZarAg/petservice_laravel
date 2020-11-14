<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_type;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $service_types = Service_type::all();
    	return view ('frontend.mainpage',compact('service_types'));
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
