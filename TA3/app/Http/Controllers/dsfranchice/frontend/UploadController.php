<?php

namespace App\Http\Controllers\dsfranchice\frontend;

use Alert;
use App\Models\footer;
use App\Models\upload;
use App\Models\header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\UploadRepository;
use App\Models\artikel;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new UploadRepository();
    }

    public function index ()
    {
        $data = upload::all();
        return view('dsfranchice.content.backend.uplod.index-upload', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = header::all();
        $footer = footer::all();
        return view ('dsfranchice.content.frontend.upload', compact('header','footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeUpload($request);

        Alert::success('Sukses', 'Data Berhasil Di input!');
        return redirect()->route('halaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upload = upload::where('id', $id)->first();
        return view ('dsfranchice.content.backend.uplod.edit-upload', compact('upload'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->repo->updateUpload($request);

        Alert::success('Sukses', 'Data Berhasil Di input!');
        return redirect()->route('upload-peluang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->UploadDestroy($id);

        Alert::success('Data Berhasil Di Hapus');
        return redirect()->route('upload-peluang');
    }
}
