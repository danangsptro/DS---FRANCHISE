<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\testimoni;
use App\Models\header;

class BerlangganController extends Controller
{
    public function index()
    {
        $header = header::all();
        $footer = footer::all();
        $data = testimoni::orderBy('created_at','DESC')->where('foreign_testimoni', 2)->take(6)->get();
        return view('dsfranchice.content.frontend.berlanggan.berlangganan', compact('header','footer', 'data'));
    }
}
