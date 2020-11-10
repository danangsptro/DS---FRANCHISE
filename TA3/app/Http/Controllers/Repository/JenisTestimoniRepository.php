<?php

namespace App\Http\Controllers\Repository;

use Illuminate\Http\Request;
use App\Models\jenis_testimoni;

class JenisTestimoniRepository
{
    // CREATE
    public function storeJenisTestimoni(Request $request)
    {
        $validate = $request->validate([
            'nama_testimoni' => 'required|min:1'
        ]);
        $jenis_testimoni = jenis_testimoni::create($validate);
        $jenis_testimoni->save();
    }

    // UPDATE
    public function updateJenisTestimoni (Request $request, jenis_testimoni $jenis_testimoni)
    {
        $validate = $request->validate([
            'nama_testimoni' => 'required|min:1'
        ]);
        $jenis_testimoni->update($validate);
    }

    // DELETE
    public function destroyJenisTestimoni($id)
    {
        $jenis_testimoni = jenis_testimoni::find($id);
        $jenis_testimoni->delete();
    }
}
