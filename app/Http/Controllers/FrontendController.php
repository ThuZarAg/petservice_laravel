<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_type;
use App\Category;
use App\Subcategory;
use App\Item;
use App\Package;
use App\Booking;


class FrontendController extends Controller
{
    public function home($value='')
    {
        $service_types = Service_type::all();
        $items = Item::take(4)->get();
        $categories =Category::all();
    	return view ('frontend.mainpage',compact('service_types','items','categories'));
    }
    public function service($value='')
    {   
        $service_types = Service_type::all();
    	return view ('frontend.service',compact('service_types'));
    }

    public function package($id)
    {   
        $servicedetails = Package::where('servicetype_id', $id)->get();
        //dd($servicedetails);
        return view ('frontend.package',compact('servicedetails'));
    }

    public function book($value='')
    {   
       $service_types = Service_type::all();
       $packages = Package::all();
        return view ('frontend.book',compact('service_types','packages'));
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
          $service_types = Service_type::all();
    	return view ('frontend.about',compact('service_types'));
    }

    public function itemsbysubcategory($id)
    {
        $mysubcategory = Subcategory::find($id);
        return view('frontend.itemsbysubcategory',compact('mysubcategory'));
    }

    public function itemdetail($id)
    {
        $item = Item::find($id);
        // dd($item);
         $items = Item::take(6)->get();
        return view('frontend.itemdetail',compact('item','items'));
    }

    public function cart($value='')
    {
        return view('frontend.cartpage');
    }


    public function signin($value='')
    {
        return view('frontend.signinpage');
    }

    public function signup($value='')
    {
        return view('frontend.signuppage');

}

    

    public function filterService(Request $request)
    {
        $sid = $request->sid;
        $packages = Package::where('servicetype_id',$sid)->get();
        return $packages;
     
    }


    public function success($value='')
    {
        return view('frontend.bookingsuccess');

}
   

}
