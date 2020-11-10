<?php

namespace App\Http\Controllers\dsfranchice\frontend;;

use Alert;
use App\Models\form;
use App\Models\header;
use App\Models\footer;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\FormPendaftaranRepository;

class FormPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new FormPendaftaranRepository();
    }

    public function index()
    {
        $data = form::all();
        return view('dsfranchice.content.backend.pendaftaran.index-pendaftaran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = header::all();
        $data_kategori = kategori::all();
        $footer = footer::all();
        return view('dsfranchice.content.frontend.silahkan', compact('header' ,'footer', 'data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeFormPendaftaran($request);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
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
        $data_pendaftaran = kategori::all();
        $form = form::where('id', $id)->first();
        return view('dsfranchice.content.backend.pendaftaran.edit-pendaftaran', compact('form', 'data_pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        $this->repo->updateFormPendaftaran($request, $form);

        Alert::success('Sukses', 'Data Berhasil Di Input');
        return redirect()->route('pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->FormPendaftaranDestroy($id);

        Alert::success('Data Berhasil di Delete!');
        return redirect()->route('pendaftaran');
    }
}
