<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Store;
use App\Vegetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class VegetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vegetables = Vegetable::all();
        return view('admin.vegetables.index')->with(['vegetables' => $vegetables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::all();
        return view('admin.vegetables.create')->with(['stores' => $stores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vegetable = new Vegetable();

        $vegetable->name = $request->name;
        $vegetable->store_id = $request->store_id;
        $vegetable->image = $request->image;
        $vegetable->price = $request->price;
        $vegetable->description = $request->description;
        $vegetable->weight = $request->weight;
        $vegetable->is_available = $request->is_available;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(285, 355)->save($location);
            $oldFilename = $vegetable->image;
            $vegetable->image = $filename;
            Storage::delete($oldFilename);
        }

        $vegetable->save();

        return redirect()->route('admin.vegetables.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vegetable = Vegetable::find($id);
        return view('admin.vegetables.show')->with(['vegetable' => $vegetable]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stores = Store::all();
        $vegetable = Vegetable::find($id);

        return view('admin.vegetables.edit')->with(['stores' => $stores, 'vegetable'=> $vegetable]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vegetable = Vegetable::find($id);

        $vegetable->name = $request->input('name');
        $vegetable->description = $request->input('description');
        $vegetable->weight = $request->input('weight');
        $vegetable->price = $request->input('price');
        $vegetable->is_available = $request->input('is_available');


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $vegetable->image;
            $vegetable->image = $filename;
            Storage::delete($oldFilename);
        }

        $vegetable->save();

        return redirect()->route('admin.vegetables.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vegetable $vegetable)
    {
        //
    }
}
