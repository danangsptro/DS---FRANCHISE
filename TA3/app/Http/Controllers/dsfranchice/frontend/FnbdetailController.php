<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer;
use App\Models\merchant;
use App\Models\header;

class FnbdetailController extends Controller
{
    public function show ($id)
    {
        $header = header::all();
        $footer = footer::all();
        $data = merchant::whereid($id)->first();
        return view('dsfranchice.content.frontend.detail.detail',compact('header' ,'data', 'footer'));
    }
}
