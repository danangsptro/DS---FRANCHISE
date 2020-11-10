<?php

namespace App\Http\Controllers\Repository;

use App\Models\footer;
use Illuminate\Http\Request;

class FooterRepository
{
    // CREATE
    public function storeFooter (Request $request)
    {
        $validate = $request->validate([
            'judul_footer' => 'required|min:3',
            'contact_us' => 'required|min:2'
        ]);

        $footer = footer::create($validate);
        $footer->save();
    }

    // UPDATE
    public function updateFooter (Request $request, footer $footer)
    {
        $request->validate([
            'judul_footer' => 'required|min:2',
            'contact_us' => 'required|min:2'
        ]);

        $id = $request->id;

        $footer = footer::find($id);
        $footer->update([
            'judul_footer' => $request->judul_footer,
            'contact_us' => $request->contact_us
        ]);
    }

    // DELETE
    public function destoryFooter ($id)
    {
        $footer = footer::find($id);
        $footer->delete();
    }

}
