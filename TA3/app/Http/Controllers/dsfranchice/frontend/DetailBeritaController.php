<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\artikel;
use App\Models\header;

class DetailBeritaController extends Controller
{
    public function show($id)
    {
        $header = header::all();
        $footer = footer::all();
        $data = artikel::whereid($id)->first();
        return view ('dsfranchice.content.frontend.detail.detail-berita', compact('header','footer', 'data'));
    }
}
