<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\merchant;
use App\Models\header;

class RetailController extends Controller
{
    public function index()
    {
        $header = header::all();
        $data1 = merchant::orderBy('created_at','DESC')->where('foreign_kategori', 2)->take(6)->get();
        $footer = footer::all();
        return view('dsfranchice.content.frontend.retail.retail', compact('header' ,'footer', 'data1'));
    }
}
