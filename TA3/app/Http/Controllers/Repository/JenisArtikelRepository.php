<?php

namespace App\Http\Controllers\Repository;

use App\Models\jenis_artikel;
use Illuminate\Http\Request;

class JenisArtikelRepository
{
    // CREATE
    public function storeJenisArtikel(Request $request)
    {
        $validate = $request->validate([
            'kode_artikel' => 'required|min:1',
            'nama_artikel' => 'required|min:2'
        ]);
        $jenis = jenis_artikel::create($validate);
        $jenis->save();
    }

    // UPDATE
    public function updateJenisArtikel(Request $request, jenis_artikel $jenis_artikel)
    {
        $validate = $request->validate([
            'kode_artikel' => 'required|min:1',
            'nama_artikel' => 'required|min:2'
        ]);
        $jenis_artikel->update($validate);
    }

    // DELETE
    public function destroyJenisArtikel($id)
    {
        $jenis = jenis_artikel::find($id);
        $jenis->delete();
    }
}
