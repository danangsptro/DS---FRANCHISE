<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use App\Models\header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\HeaderRepository;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new HeaderRepository();
    }

    public function index()
    {
        $data = header::all();
        return view ('dsfranchice.content.backend.header.index-header', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dsfranchice.content.backend.header.create-header');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeHeader($request);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('header.index');
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
    public function edit(header $header)
    {
        $header->find($header->id)->all();
        return view ('dsfranchice.content.backend.header.edit-header',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, header $header)
    {
        $this->repo->updateHeader($request, $header);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('header.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->destroyHeader($id);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('header.index');
    }
}
