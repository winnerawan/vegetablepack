<?php

namespace App\Http\Controllers;

use App\Packet;
use App\Page;
use App\Store;
use App\Vegetable;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::all();
        return view('welcome')->with(['vegetables' => $vegetables]);
    }

    public function about()
    {
        $page = Page::all()->first();
        return view('about')->with(['page' => $page]);
    }

    public function privacy()
    {
        $page = Page::all()->first();
        return view('privacy')->with(['page' => $page]);
    }

    public function tos()
    {
        $page = Page::all()->first();
        return view('tos')->with(['page' => $page]);
    }

    public function vegetables()
    {
        $vegetables = Vegetable::all();
        return view('tos')->with(['vegetables' => $vegetables]);
    }

    public function stores()
    {
        $stores = Store::all();
        return view('stores')->with(['stores' => $stores]);
    }

    public function packets()
    {
        $packets = Packet::all();
        return view('stores')->with(['packets' => $packets]);
    }

    public function whatsapp()
    {
        $page = Page::all()->first();
        return view('location')->with(['page' => $page]);
    }

    public function lokasi()
    {
        $page = Page::all()->first();
        return view('location')->with(['page' => $page]);
    }
}
