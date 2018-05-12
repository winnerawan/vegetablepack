<?php

namespace App\Http\Controllers\AdminAuth;

use App\District;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\Store;
use App\Vegetable;
use App\Village;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Image;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::all();
        return view('admin.stores.index')->with(['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merchants = Merchant::all();
        $zones = Zone::all();
        $districts = District::all();
        $villages = Village::all();
        return view('admin.stores.create')->with(['merchants' => $merchants, 'villages' => $villages, 'zones' => $zones, 'districts' => $districts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Store();

        $store->merchant_id = $request->merchant_id;
        $store->village_id = $request->village_id;
        $store->name = $request->name;
        $store->description = $request->description;
        $store->street = $request->street;
        $store->contact = $request->contact;
        $store->open = $request->open;
        $store->close = $request->close;
        $store->is_active = $request->is_active;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('/images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);
            $oldFilename = $store->image;
            $store->image = $filename;
            Storage::delete($oldFilename);
        }

        $store->save();

        return redirect()->route('admin.stores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $store = Store::find($id);
        return view('admin.stores.show')->with(['store' => $store]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
