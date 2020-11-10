<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\header;

class PeluangController extends Controller
{
    public function index()
    {
        $header = header::all();
        $footer = footer::all();
        return view('dsfranchice.content.frontend.peluangbisnis', compact( 'header','footer'));
    }
}
