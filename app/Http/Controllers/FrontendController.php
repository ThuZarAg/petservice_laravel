<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_type;
use App\Category;
use App\Subcategory;
use App\Item;


class FrontendController extends Controller
{
    public function home($value='')
    {
        $service_types = Service_type::all();
        $items = Item::take(8)->get();
        $categories =Category::all();
    	return view ('frontend.mainpage',compact('service_types','items','categories'));
    }
    public function service($value='')
    {   
        $service_types = Service_type::all();
    	return view ('frontend.service',compact('service_types'));
    }
    public function shop($value='')
    {
        $items = Item::all();
    	return view ('frontend.shop',compact('items'));
    }
    
    public function contact($value='')
    {
    	return view ('frontend.contact');
    }
    public function about($value='')
    {
    	return view ('frontend.about');
    }

    // public function shopitem($value='')
    // {
    //     $items = Item::all();
    //     return view ('frontend.shopitem',compact('items'));
    // }

    // public function shopitem($id)
    // {
    //     $items = Item::find($id);
    //     $mycategory = Category::find($id);
    //     return view ('frontend.shopitem',compact('items','mycategory'));
    // }

    public function itemsbysubcategory($id)
    {
        $mysubcategory = Subcategory::find($id);
        return view('frontend.itemsbysubcategory',compact('mysubcategory'));
    }

}
