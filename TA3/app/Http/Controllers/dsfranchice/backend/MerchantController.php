<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use App\Models\kategori;
use App\Models\merchant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\MerchantRepository;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new MerchantRepository();
    }

    public function index()
    {
        $data = merchant::all();
        return view('dsfranchice.content.backend.merchant.index-merchant', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = kategori::all();
        return view('dsfranchice.content.backend.merchant.create-merchant', compact('data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeMerchant($request);

        Alert::success('Sukses', 'Data Berhasil Di input!');
        return redirect()->route('merchant.index');
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
    public function edit(merchant $merchant)
    {
        $data_merchant = kategori::all();
        $merchant->find($merchant->id)->all();
        return view('dsfranchice.content.backend.merchant.edit-merchant', compact('merchant', 'data_merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, merchant $merchant)
    {
        $this->repo->updateMerchant($request, $merchant);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('merchant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->MerchantDestroy($id);

        Alert::success('Data Berhasil di Delete!');
        return redirect()->route('merchant.index');
    }
}
