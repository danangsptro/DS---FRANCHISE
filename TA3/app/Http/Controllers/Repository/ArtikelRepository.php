<?php

namespace App\Http\Controllers\Repository;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class ArtikelRepository
{
    // CREATE
    public function storeArtikel(Request $request)
    {
        Validator::make($request->all(),
        [
            'foreign_artikel' => 'required|min:1',
            'judul_artikel' => 'required|min:5',
            'isi_artikel' => 'required|min:5',
            'penulis_artikel' => 'required|min:5',
            'foto_artikel' => 'required|image|mimes:png,jpg,jpeg'
       ])->validate();

       $image = $request->file('foto_artikel');
       $image->storeAs('public/img-artikel', $image->hashName());

       artikel::create([
            'foreign_artikel' => $request->foreign_artikel,
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'penulis_artikel' => $request->penulis_artikel,
            'foto_artikel' => $image->hashName(),
       ]);
    }

    // UPDATE
    public function updateArtikel (Request $request, artikel $artikel)
    {
        Validator::make($request->all(),
        [
            'foreign_artikel' => 'required|min:1',
            'judul_artikel' => 'required|min:2',
            'penulis_artikel' => 'required|min:3',
            'isi_artikel' => 'required|min:10',
            'foto_artikel' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $artikel = artikel::findOrFail($artikel->id);

        if ($request->file('foto_artikel') == "") {
            $artikel->update([
                'foreign_artikel' => $request->foreign_artikel,
                'judul_artikel' => $request->judul_artikel,
                'penulis_artikel' => $request->penulis_artikel,
                'isi_artikel' => $request->isi_artikel,
            ]);
        } else {
            Storage::disk('local')->delete('public/img-artikel/' . $artikel->foto_artikel);

            $image = $request->file('foto_artikel');
            $image->storeAs('public/img-artikel', $image->hashName());

            $artikel->update([
                'foreign_artikel' => $request->foreign_artikel,
                'judul_artikel' => $request->judul_artikel,
                'penulis_artikel' => $request->penulis_artikel,
                'isi_artikel' => $request->isi_artikel,
                'foto_artikel' => $image->hashName(),
            ]);
        }
    }

    // DELETE
    public function ArtikelDestroy($id)
    {
        $artikel = artikel::find($id);
        $artikel->delete();
    }
}
