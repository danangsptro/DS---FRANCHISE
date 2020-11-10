<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use Illuminate\Http\Request;
use App\Models\jenis_testimoni;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\JenisTestimoniRepository;

class JenisTestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new JenisTestimoniRepository();
    }

    public function index()
    {
        $data = jenis_testimoni::all();
        return view('dsfranchice.content.backend.JenisTestimoni.index-jenis-testimoni', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dsfranchice.content.backend.JenisTestimoni.create-jenis-testimoni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->repo->storeJenisTestimoni($request);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('jenis-testimoni.index');
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
    public function edit(jenis_testimoni $jenis_testimoni)
    {
        $jenis_testimoni->find($jenis_testimoni->id)->all();
        return view('dsfranchice.content.backend.JenisTestimoni.edit-jenis-testimoni', compact('jenis_testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jenis_testimoni $jenis_testimoni)
    {
        $this->repo->updateJenisTestimoni($request, $jenis_testimoni);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('jenis-testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->destroyJenisTestimoni($id);

        Alert::success('Data Berhasil Di Delete!');
        return redirect()->route('jenis-testimoni.index');
    }
}
