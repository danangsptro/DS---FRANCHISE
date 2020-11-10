<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use App\Models\footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\FooterRepository;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new FooterRepository();
    }

    public function index()
    {
        $data = footer::all();
        return view('dsfranchice.content.backend.footer.footer', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dsfranchice.content.backend.footer.create-footer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeFooter($request);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('halaman-footer');
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
        $footer = footer::where('id', $id)->first();
        return view('dsfranchice.content.backend.footer.edit-footer',compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, footer $footer)
    {
        $this->repo->updateFooter($request, $footer);

        Alert::success('Sukses', 'Data Berhasil Di Input!');
        return redirect()->route('halaman-footer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->destoryFooter($id);

        Alert::success('Data Berhasil Di Hapus');
        return redirect()->route('halaman-footer');
    }
}
