<?php

namespace App\Http\Controllers\Repository;

use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriRepository
{
    // CREATE
    public function storeKategori(Request $request)
    {
        $validate = $request->validate([
            'kode_kategori' => 'required|min:1',
            'nama_kategori' => 'required|min:3'
        ]);
        $kategori = kategori::create($validate);
        $kategori->save();

    }

    // UPDATE
    public function updateKategori(Request $request, kategori $kategori)
    {
        $validate = $request->validate([
            'kode_kategori' => 'required|min:1',
            'nama_kategori' => 'required|min:3'
        ]);
        $kategori->update($validate);

    }

    // DELETE
    public function destroyKategori($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
    }

}
