<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_type;

class ServicetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicetypes = Service_type::all();
        return view('servicetype.index',compact('servicetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicetype.create');
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
            'name'=>'required|min:2'
            ]);

        $servicetypes = new Service_type();
        $servicetypes->name = $request->name;
        $servicetypes->description = $request->description;

        $servicetypes->save();

        return redirect()->route('servicetype.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service_type $servicetype)
    {
       
        return view('servicetype.show',compact('servicetype')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service_type $servicetype)
    {
        return view('servicetype.edit',compact('servicetype'));
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
            'name' => 'required',
            'description' => 'required',
        ]);    
        // File Upload
        

        // Update Data
        $servicetypes = Service_type::find($id);
        $servicetypes->name = $request->name;
        $servicetypes->description = $request->description;

        $servicetypes->save();

        // Redirect
        

        return redirect()->route('servicetype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service_type $servicetype)
    {
        $servicetype->delete();
        return redirect()->route('servicetype.index');
    }
}
