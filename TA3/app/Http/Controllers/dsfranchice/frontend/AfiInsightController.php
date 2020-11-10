<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\artikel;
use App\Models\header;

class AfiInsightController extends Controller
{
    public function index()
    {
        $header = header::all();
        $data = artikel::orderBy('created_at','DESC')->where('foreign_artikel', 1)->take(6)->get();
        $footer = footer::all();
        return view('dsfranchice.content.frontend.afiinsight.afi', compact('footer', 'data', 'header'));
    }
}
