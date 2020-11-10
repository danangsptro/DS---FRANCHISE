<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use Illuminate\Http\Request;
use App\Models\jenis_artikel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\JenisArtikelRepository;

class JenisArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new JenisArtikelRepository();
    }

    public function index()
    {
        $data = jenis_artikel::all();
        return view('dsfranchice.content.backend.JenisArtikel.index-jenis', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dsfranchice.content.backend.JenisArtikel.create-jenis');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeJenisArtikel($request);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('jenis-artikel.index');
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
    public function edit(jenis_artikel $jenis_artikel)
    {
        $jenis_artikel->find($jenis_artikel->id)->all();
        return view('dsfranchice.content.backend.JenisArtikel.edit-jenis', compact('jenis_artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenis_artikel $jenis_artikel)
    {
        $this->repo->updateJenisArtikel($request, $jenis_artikel);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('jenis-artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->destroyJenisArtikel($id);

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('jenis-artikel.index');
    }
}
