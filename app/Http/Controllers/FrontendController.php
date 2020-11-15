<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_type;

use App\Item;


class FrontendController extends Controller
{
    public function home($value='')
    {
        $service_types = Service_type::all();
        $items = Item::all();
    	return view ('frontend.mainpage',compact('service_types','items'));
    }
    public function service($value='')
    {   
        $service_types = Service_type::all();
    	return view ('frontend.service',compact('service_types'));
    }
    public function shop($value='')
    {
        $categories = Category::all();
    	return view ('frontend.shop',compact('categories'));
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
