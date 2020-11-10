<?php

namespace App\Http\Controllers\Repository;

use App\Models\form;
use Illuminate\Http\Request;

class FormPendaftaranRepository
{
    // CREATE
    public function storeFormPendaftaran (Request $request)
    {
        $validate = $request->validate(
        [
            'nama_lengkap' => 'required|min:2',
            'foreign_form' => 'required|min:1',
            'alamat_email' => 'required|min:6',
            'nomor_telepon' => 'required|min:7',
            'domisili' => 'required|min:2',
            'diminati' => 'required:min:5',
         ]);

         $form = form::create($validate);
         $form->save();
    }

    //UPDATE
    public function updateFormPendaftaran (Request $request, form $form)
    {
        $request->validate([
            'nama_lengkap' => 'required|min:3',
            'foreign_form' => 'required|required:1',
            'alamat_email' => 'required|min:5',
            'nomor_telepon' => 'required|min:9',
            'domisili' => 'required|min:4',
            'diminati' => 'required|min:3'
        ]);

        $id = $request->id;

        $form = form::find($id);
        $form->update([
            'nama_lengkap' => $request->nama_lengkap,
            'foreign_form' => $request->foreign_form,
            'alamat_email' => $request->alamat_email,
            'nomor_telepon' => $request->nomor_telepon,
            'domisili' => $request->domisili,
            'diminati' => $request->diminati
        ]);
    }
    // DELETE
    public function FormPendaftaranDestroy($id)
    {
        $form = form::find($id);
        $form->delete();
    }
}
