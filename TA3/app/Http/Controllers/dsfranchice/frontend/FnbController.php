<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\merchant;
use App\Models\header;

class FnbController extends Controller
{
    public function index()
    {
        $header = header::all();
        $data = merchant::orderBy('created_at','DESC')->where('foreign_kategori', 1)->take(6)->get();
        $footer = footer::all();
        return view('dsfranchice.content.frontend.fnb.makananminuman', compact('header' ,'footer', 'data'));
    }
}
