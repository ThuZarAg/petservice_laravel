<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 
use App\Item;
use App\Subcategory;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        // dd($items);
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('item.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request); // print output

        // Validation
        $request->validate([
            
            'name' => 'required',
            'photo' => 'required',
            'price' => 'required',
            'discount' => 'sometimes|required',
            'description' => 'required',
            'subcategory' => 'required',

        ]);
            //dd($request);
       // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('items', $fileName, 'public');

            $path = '/storage/'.$filePath;
        }

        //codeno
        $codeno = "FD".mt_rand(100000,900000);

        // Store Data
        $item = new Item;
        $item->codeno = $codeno;
        $item->name = $request->name;
        $item->photo = $path;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->subcategory_id = $request->subcategory;

        $item->save();

        // Redirect
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $item = Item::find($id); // obj

        $item = Item::findOrFail($id);
        
        return view('item.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $subcategories = Subcategory::all();
        // dd($item);
        return view('item.edit',compact('item','subcategories'));
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
         // dd($request); // print output

        // Validation


        $request->validate([
            'codeno' => 'required',
            'name' => 'required',
            // 'photo' => 'required',
            // may be present or absent
            'price' => 'required',
            'discount' => 'sometimes|required',
            'description' => 'required',
            'subcategory' => 'required',

        ]);

        

        // File Upload
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backendtemplate/itemimg'),$imageName);
            $myfile = 'backendtemplate/itemimg/'.$imageName;
        }

        // if upload new image, delete old image;
        
        

        // Update Data
        $item = Item::find($id);
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        if ($request->hasFile('photo')) {
                File::delete($item->photo);
                $item->photo = $myfile;  
            }else{
                $item->photo = $item->photo;
            }
        
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->subcategory_id = $request->subcategory;

        $item->save();

        // Redirect
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete related file from storage
        // File::delete($item->photo);
        $item = Item::find($id);

        $item->delete();
        
        return redirect()->route('item.index');
    }
}

