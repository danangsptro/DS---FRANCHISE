<?php

namespace App\Http\Controllers\Repository;

use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TestimoniRepository
{
    // CREATE
    public function storeTestimoni (Request $request)
    {
        Validator::make($request->all(),
        [
            'foreign_testimoni' => 'required|min:1',
            'foto_bukti' => 'required|image|mimes:png,jpg,jpeg',
            'pesan_kesan' => 'required|min:5',
            'nama_mitra' => 'required|min:2'
        ])->validate();

        $image = $request->file('foto_bukti');
        $image->storeAs('public/img-testimoni', $image->hashName());

        testimoni::create([
            'foreign_testimoni' => $request->foreign_testimoni,
            'foto_bukti' => $image->hashName(),
            'pesan_kesan' => $request->pesan_kesan,
            'nama_mitra' => $request->nama_mitra,
        ]);
    }

    // UPDATE
    public function updateTestimoni (Request $request, testimoni $testimoni)
    {
        Validator::make($request->all(),
        [
            'foreign_testimoni' => 'required|min:1',
            'foto_bukti' => 'required|image|mimes:png,jpg,jpeg',
            'pesan_kesan' => 'required|min:5',
            'nama_mitra' => 'required|min:2'
        ])->validate();

        $testimoni = testimoni::findOrFail($testimoni->id);

        if ($request->file('foto_bukti') == "" ){
            $testimoni->update([
                'foreign_testimoni' => $request->foreign_testimoni,
                'pesan_kesan' => $request->pesan_kesan,
                'nama_mitra' => $request->nama_mitra,
            ]);
        } else {
            Storage::disk('local')->delete('public/img-testimoni/' . $testimoni->foto_bukti);

            $image = $request->file('foto_bukti');
            $image->storeAs('public/img-testimoni', $image->hashName());

            $testimoni->update([
                'foreign_testimoni' => $request->foreign_testimoni,
                'foto_bukti' => $image->hashName(),
                'pesan_kesan' => $request->pesan_kesan,
                'nama_mitra' => $request->nama_mitra,
            ]);
        }
    }

    // DELETE
    public function TestimoniDestroy($id)
    {
        $testimoni = testimoni::find($id);
        $testimoni->delete();
    }
}
