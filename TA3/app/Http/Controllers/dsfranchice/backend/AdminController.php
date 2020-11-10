<?php

namespace App\Http\Controllers\dsfranchice\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('dsfranchice.content.backend.dasboard');
    }
}
