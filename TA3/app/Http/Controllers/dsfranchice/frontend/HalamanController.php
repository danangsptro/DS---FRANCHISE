<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\carousel;
use App\Models\header;

class HalamanController extends Controller
{
    public function index()
    {
        $header = header::all();
        $carosel = carousel::where('id', 1)->get();
        $carosel2 = carousel::where('id', 2)->get();
        $footer = footer::all();
        return view ('dsfranchice.content.frontend.halaman', compact('header' ,'carosel', 'carosel2','footer'));
    }
}
