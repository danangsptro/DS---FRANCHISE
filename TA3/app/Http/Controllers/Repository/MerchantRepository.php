<?php

namespace App\Http\Controllers\Repository;

use App\Models\merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MerchantRepository
{
    // CREATE
    public function storeMerchant(Request $request)
    {
        Validator::make($request->all(),
        [
            'foreign_kategori' => 'required',
            'nama_merchant' => 'required|min:5',
            'tahun_berdiri' => 'required|min:4',
            'bentuk_kerjasama' => 'required|min:5',
            'jumlah_outlet' => 'required|min:1',
            'total_investasi' => 'required|min:5',
            'foto_merchant' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $image = $request->file('foto_merchant');
        $image->storeAs('public/img', $image->hashName());

        merchant::create([
            'foreign_kategori' => $request->foreign_kategori,
            'nama_merchant' => $request->nama_merchant,
            'tahun_berdiri' => $request->tahun_berdiri,
            'bentuk_kerjasama' => $request->bentuk_kerjasama,
            'jumlah_outlet' => $request->jumlah_outlet,
            'total_investasi' => $request->total_investasi,
            'foto_merchant' => $image->hashName(),
        ]);
    }

    // UPDATE
    public function updateMerchant (Request $request, merchant $merchant)
    {
        Validator::make($request->all(),
        [
            'foreign_kategori' => 'required|min:1',
            'nama_merchant' => 'required|min:5',
            'tahun_berdiri' => 'required|min:4',
            'bentuk_kerjasama' => 'required|min:5',
            'jumlah_outlet' => 'required|min:1',
            'total_investasi' => 'required|min:5',
            'foto_merchant' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $merchant = merchant::findOrFail($merchant->id);

        if ($request->file('foto_merchant') == "") {
            $merchant->update([
                'foreign_kategori' => $request->foreign_kategori,
                'nama_merchant' => $request->nama_merchant,
                'tahun_berdiri' => $request->tahun_berdiri,
                'bentuk_kerjasama' => $request->bentuk_kerjasama,
                'jumlah_outlet' => $request->jumlah_outlet,
                'total_investasi' => $request->total_investasi,
            ]);
        } else {
            Storage::disk('local')->delete('public/img/' . $merchant->foto_merchant);

            $image = $request->file('foto_merchant');
            $image->storeAs('public/img', $image->hashName());

            $merchant->update([
                'foreign_kategori' => $request->foreign_kategori,
                'nama_merchant' => $request->nama_merchant,
                'tahun_berdiri' => $request->tahun_berdiri,
                'bentuk_kerjasama' => $request->bentuk_kerjasama,
                'jumlah_outlet' => $request->jumlah_outlet,
                'total_investasi' => $request->total_investasi,
                'foto_merchant' => $image->hashName(),
            ]);
        }
    }

    // DELETE
    public function MerchantDestroy($id)
    {
        $merchant = merchant::find($id);
        $merchant->delete();
    }
}
