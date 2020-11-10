<?php

namespace App\Http\Controllers\Repository;

use App\Models\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UploadRepository
{
    // CREATE
    public function storeUpload(Request $request)
    {
        Validator::make($request->all(),
        [
            'nama_perusahaan' => 'required|min:5',
            'nama_merk' => 'required|min:2',
            'nama_pemilik' => 'required|min:4',
            'alamat_kantor' => 'required|min:5',
            'nomor_telepon' => 'required|min:8',
            'email' => 'required|min:5',
            'alamat_web' => 'required|min:5',
            'minimal_investasi' => 'required|min:5',
            'jumlah_outlet' => 'required|min:1',
            'tahun_berdiri' => 'required|min:4',
            'kota_asal' => 'required|min:4',
            'logo_usaha' => 'required|image|mimes:png,jpg,jpeg',
            'foto_usaha' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $image = $request->file('logo_usaha');
        $image1 = $request->file('foto_usaha');
        $image->storeAs('public/img-upload', $image->hashName());
        $image1->storeAs('public/img-upload', $image1->hashName());

        upload::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_merk' => $request->nama_merk,
            'nama_pemilik' => $request->nama_pemilik,
            'alamat_kantor' => $request->alamat_kantor,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'alamat_web' => $request->alamat_web,
            'minimal_investasi' => $request->minimal_investasi,
            'jumlah_outlet' => $request->jumlah_outlet,
            'tahun_berdiri' => $request->tahun_berdiri,
            'kota_asal' => $request->kota_asal,
            'logo_usaha' => $image->hashName(),
            'foto_usaha' => $image1->hashName(),
        ]);
    }

    // UPDATE
    public function updateUpload (Request $request)
    {
        $id = $request->id;
        Validator($request->all(),
        [
            'nama_perusahaan' => 'required|min:5',
            'nama_merk' => 'required|min:2',
            'nama_pemilik' => 'required|min:4',
            'alamat_kantor' => 'required|min:5',
            'nomor_telepon' => 'required|min:8',
            'email' => 'required|min:5',
            'alamat_web' => 'required|min:5',
            'minimal_investasi' => 'required|min:5',
            'jumlah_outlet' => 'required|min:1',
            'tahun_berdiri' => 'required|min:4',
            'kota_asal' => 'required|min:4',
            'logo_usaha' => 'required|image|mimes:png,jpg,jpeg',
            'foto_usaha' => 'required|image|mimes:png,jpg,jpeg'
        ])->validate();

        $upload = upload::findOrFail($id);

        if ($request->file('logo_usaha', 'foto_usaha') == "") {
            $upload->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'nama_merk' => $request->nama_merk,
                'nama_pemilik' => $request->nama_pemilik,
                'alamat_kantor' => $request->alamat_kantor,
                'nomor_telepon' => $request->nomor_telepon,
                'email' => $request->email,
                'alamat_web' => $request->alamat_web,
                'minimal_investasi' => $request->minimal_investasi,
                'jumlah_outlet' => $request->jumlah_outlet,
                'tahun_berdiri' => $request->tahun_berdiri,
                'kota_asal' => $request->kota_asal,
            ]);
        } else {
            Storage::disk('local')->delete('public/img-upload/' . $upload->logo_usaha);
            Storage::disk('local')->delete('public/img-upload/' . $upload->foto_usaha);

            $image = $request->file('logo_usaha');
            $image1 = $request->file('foto_usaha');
            $image->storeAs('public/img-upload', $image->hashName());
            $image1->storeAs('public/img-upload', $image1->hashName());

            $upload->update([
                'nama_perusahaan' => $request->nama_perusahaan,
                'nama_merk' => $request->nama_merk,
                'nama_pemilik' => $request->nama_pemilik,
                'alamat_kantor' => $request->alamat_kantor,
                'nomor_telepon' => $request->nomor_telepon,
                'email' => $request->email,
                'alamat_web' => $request->alamat_web,
                'minimal_investasi' => $request->minimal_investasi,
                'jumlah_outlet' => $request->jumlah_outlet,
                'tahun_berdiri' => $request->tahun_berdiri,
                'kota_asal' => $request->kota_asal,
                'logo_usaha' => $image->hashName(),
                'foto_usaha' => $image1->hashName(),
            ]);
        }
    }

    // DELETE
    public function UploadDestroy($id)
    {
        $upload = upload::find($id);
        $upload->delete();
    }
}
