@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'MAKAN & MINUMAN | FRANCHISE')

@section('dsfranchice.content.frontend')
    <div class="container" style="margin-top: 11rem">
        <br>
        <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                class="fa fa-home">&nbsp;Home</a> » <a href="" style="text-decoration: none; color: black;">Upload Peluang
                Bisnis</a></span>
        <h1 id="upload">Upload Peluang Usaha Anda</h1>
        <hr style=" width: 50px; border-top: 3px solid #838383">
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('assets/img/upload.png') }}" class="card-img-top" alt="..." style="height:500px;">
                <br>
                <br>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('store-upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_perusahaan"><strong>Nama Perusahaan PT/CV (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="nama_perusahaan">
                        @error('nama_perusahaan')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_merk"><strong>Nama Merk (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="nama_merk">
                        @error('nama_merk')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_pemilik"><strong>Nama Pemilik (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="nama_pemilik">
                        @error('nama_pemilik')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_kantor"><strong>Alamat Kantor Pusat (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="alamat_kantor">
                        @error('alamat_kantor')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon"><strong>Nomor Telephone</strong></label>
                        <input type="text" class="form-control" name="nomor_telepon">
                        @error('nomor_telepon')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"><strong>Your Email (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="email">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat_web"><strong>Alamat Website (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="alamat_web">
                        @error('alamat_web')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="minimal_investasi"><strong>Minimal Investasi (harus Diisi)</strong></label>
                        <input type="text" class="form-control" name="minimal_investasi">
                        @error('minimal_investasi')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_outlet"><strong>Jumlah Outlet</strong></label>
                        <input type="text" class="form-control" name="jumlah_outlet">
                        @error('jumlah_outlet')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri"><strong>Tahun Berdiri</strong></label>
                        <input type="text" class="form-control" name="tahun_berdiri">
                        @error('tahun_berdiri')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kota_asal"><strong>Kota Asal</strong></label>
                        <input type="text" class="form-control" name="kota_asal">
                        @error('kota_asal')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="logo_usaha"><strong>Logo Usaha (harus Diisi)</strong></label>
                        <input type="file" class="form-control" name="logo_usaha">
                        @error('logo_usaha')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto_usaha"><strong>Foto Usaha (harus Diisi)</strong></label>
                        <input type="file" class="form-control" name="foto_usaha">
                        @error('foto_usaha')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark" id="krm" onclick="return confirm('Anda Yakin Sudah Benar ?')">Kirim Usaha</button>
                </form>
                <br>
                <br>
            </div>
            <div class="peraturan" style="padding:4rem">
                <li>Dengan mengisi formulir direktori ini, Pendaftar menyetujui bahwa pendaftar menyatakan sebagai pemilik
                    perusahaan yang sah dan atau pihak perwakilan yang ditugaskan oleh pemilik perusahaan tersebut</li>
                <li>Dengan mengisi formulir ini, Pendaftar telah menyetujui dan memberikan izin sepenuhnya kepada pihak
                    DS|FRANCHISE dan atau perusahaan yang bekerjasama dengan DS|FRANCHISE, dalam hal penggunaaan
                    data perusahaan Pendaftar untuk materi publikasi maupun riset`</li>
                <li>Pendaftar menyatakan bahwa semua data yang diisi dan diserahkan kepada pihak DS|FRANCHISE adalah
                    data yang sebenar – benarnya dan dapat dipertanggungjawabkan oleh pihak pendaftar</li>
                <li>DS|FRANCHISE tidak terlibat dalam segala aktifitas transaksi antara pemilik perusahaan pendaftar
                    dengan pihak manapun</li>
            </div>
            <br>
            <br>
        </div>
    </div>
@endsection
