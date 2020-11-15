<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Service_type;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $packages = Package::all();
       // dd($packages);
        return view('package.index',compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicetype = Service_type::all();
        // dd($servicetype);
         return view('package.create',compact('servicetype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "name" => "required",
            "duration" => "required",
            "price" => "required",
            "total" => "required",
            "servicetype" => "required"
        ]); 
        // dd($request);

        $packages = new Package;
        $packages->name = $request->name;
        $packages->duration = $request->duration;
        $packages->price = $request->price;
        $packages->total = $request->total;
        $packages->servicetype_id = $request->servicetype;

        $packages->save();
        // dd($packages);
        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $package = Package::findOrFail($id);
        return view('package.show',compact('package')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::find($id);
        $servicetypes = Service_type::all();
       return view('package.edit',compact('package','servicetypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            "name" => "required",
            "duration" => "required",
            "price" => "required",
            "total" => "required",
            "servicetype" => "required"
        ]); 
        // dd($request);

        $packages = Package::find($id);
        $packages->name = $request->name;
        $packages->duration = $request->duration;
        $packages->price = $request->price;
        $packages->total = $request->total;
        $packages->servicetype_id = $request->servicetype;

        $packages->save();
        // dd($packages);
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages = Package::find($id);
       $packages->delete();
        return redirect()->route('package.index');
    }
}
