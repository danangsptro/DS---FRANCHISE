<?php

namespace App\Http\Controllers\dsfranchice\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\testimoni;
use Alert;
use App\Http\Controllers\Repository\TestimoniRepository;
use App\Models\jenis_testimoni;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new TestimoniRepository();
    }

    public function index()
    {
        $data = testimoni::all();
        return view('dsfranchice.content.backend.testimoni.index-testimoni', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimoni = jenis_testimoni::all();
        return view('dsfranchice.content.backend.testimoni.create-testimoni', compact('testimoni'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeTestimoni($request);

        Alert::success('Sukses', 'Data Berhasil Di input!');
        return redirect()->route('testimoni.index');
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
    public function edit(testimoni $testimoni)
    {
        $data_testimoni = jenis_testimoni::all();
        $testimoni->find($testimoni->id)->all();
        return view('dsfranchice.content.backend.testimoni.edit-testimoni', compact('data_testimoni' ,'testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, testimoni $testimoni)
    {
        $this->repo->updateTestimoni($request, $testimoni);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->TestimoniDestroy($id);

        Alert::success('Data Berhasil Di Hapus');
        return redirect()->route('testimoni.index');
    }
}
