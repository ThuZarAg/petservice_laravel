<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        
        //dd($categories);
    
        $subcategories = Subcategory::all();
        return view('subcategory.index',compact('subcategories','categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       $categories = Category::all();
        return view('subcategory.create',compact('categories'));
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

        $subcategories = new Subcategory();
        $subcategories->name = $request->name;
        $subcategories->category_id = $request->category;

        $subcategories->save();

        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {   
         $categories = Category::all();
        // dd($categories);
         return view('subcategory.show',compact('subcategory','categories'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $subcategories = Subcategory::find($id);
        $categories = Category::all();
        return view('subcategory.edit',compact('subcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);    
        // File Upload
        

        // Update Data
        $subcategories = Subcategory::find($id);
        $subcategories->name = $request->name;
        $subcategories->category_id = $request->category;

        $subcategories->save();

        // Redirect
        

        return redirect()->route('subcategory.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('subcategory.index');    }
}
