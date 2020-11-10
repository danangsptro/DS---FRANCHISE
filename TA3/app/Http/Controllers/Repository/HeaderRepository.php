<?php

namespace App\Http\Controllers\Repository;

use App\Models\header;
use Illuminate\Http\Request;

class HeaderRepository
{
    // CREATE
    public function storeHeader(Request $request)
    {
        $validate = $request->validate([
            'judul_header' => 'required|min:2'
        ]);
        $header = header::create($validate);
        $header->save();
    }

    // UPDATE
    public function updateHeader(Request $request, header $header)
    {
        $validate = $request->validate([
            'judul_header' => 'required|min:2'
        ]);
        $header->update($validate);
    }

    // DELETE
    public function destroyHeader($id)
    {
        $header = header::find($id);
        $header->delete();
    }

}
