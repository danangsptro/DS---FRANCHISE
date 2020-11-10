<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use App\Models\artikel;
use Illuminate\Http\Request;
use App\Models\jenis_artikel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\ArtikelRepository;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new ArtikelRepository();
    }

    public function index()
    {
        $data = artikel::all();
        return view('dsfranchice.content.backend.artikel.index-artikel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_jenis = jenis_artikel::all();
        return view('dsfranchice.content.backend.artikel.create-artikel',compact('data_jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->repo->storeArtikel($request);

       Alert::success('Sukses', 'Data Berhasil Di input!');
       return redirect()->route('artikel.index');
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
    public function edit(artikel $artikel)
    {
        $data_artikel = jenis_artikel::all();
        $artikel->find($artikel->id)->all();
        return view('dsfranchice.content.backend.artikel.edit-artikel', compact('data_artikel', 'artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        $this->repo->updateArtikel($request, $artikel);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->ArtikelDestroy($id);

        Alert::success('Data Berhasil Di Hapus');
        return redirect()->route('artikel.index');
    }
}
