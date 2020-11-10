@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-UPLOAD')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Upload</h1>
        <br>
        <form action="{{ route('update-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" class="form-control" name="id" value="{{ $upload->id }}">
            <div class="form-group">
                <label for="nama_perusahaan"><strong>Nama Perusahaan</strong></label>
                <input type="text" class="form-control" name="nama_perusahaan" value="{{ $upload->nama_perusahaan }}">
                @error('nama_perusahaan')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_merk"><strong>Nama Merk</strong></label>
                <input type="text" class="form-control" name="nama_merk" value="{{ $upload->nama_merk }}">
                @error('nama_merk')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_pemilik"><strong>Nama Pemilik</strong></label>
                <input type="text" class="form-control" name="nama_pemilik" value="{{ $upload->nama_pemilik }}">
                @error('nama_pemilik')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat_kantor"><strong>Alamat Kantor</strong></label>
                <input type="text" class="form-control" name="alamat_kantor" value="{{ $upload->alamat_kantor }}">
                @error('alamat_kantor')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nomor_telepon"><strong>Nomor Telephone</strong></label>
                <input type="text" class="form-control" name="nomor_telepon" value="{{ $upload->nomor_telepon }}">
                @error('nomor_telepon')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email"><strong>Email</strong></label>
                <input type="text" class="form-control" name="email" value="{{ $upload->email }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat_web"><strong>Alamat Web</strong></label>
                <input type="text" class="form-control" name="alamat_web" value="{{ $upload->alamat_web }}">
                @error('alamat_web')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="minimal_investasi"><strong>Minimal Investasi</strong></label>
                <input type="text" class="form-control" name="minimal_investasi" value="{{ $upload->minimal_investasi }}">
                @error('minimal_investasi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah_outlet"><strong>Jumlah Outlet</strong></label>
                <input type="text" class="form-control" name="jumlah_outlet" value="{{ $upload->jumlah_outlet }}">
                @error('jumlah_outlet')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun_berdiri"><strong>Tahun Berdiri</strong></label>
                <input type="text" class="form-control" name="tahun_berdiri" value="{{ $upload->tahun_berdiri }}">
                @error('tahun_berdiri')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="kota_asal"><strong>Kota Asal</strong></label>
                <input type="text" class="form-control" name="kota_asal" value="{{ $upload->kota_asal }}">
                @error('kota_asal')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="logo_usaha">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img-upload/') . $upload->logo_usaha }}" alt="logo_usaha"
                    style="width: 150px"><br>
                <label for="logo_usaha">Pilihan Gambar</label>
                <input type="file" class="form-control" id="logo_usaha" name="logo_usaha">
                @error('logo_usaha')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_usaha">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img-upload/') . $upload->foto_usaha }}" alt="foto_usaha"
                    style="width: 150px"><br>
                <label for="foto_usaha">Pilihan Gambar</label>
                <input type="file" class="form-control" id="foto_usaha" name="foto_usaha">
                @error('foto_usaha')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('upload-peluang') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
    <br>
@endsection
