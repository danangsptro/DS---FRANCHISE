@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'SILAHKAN ISI DATA DIRI ANDA | FRANCHISE')

@section('dsfranchice.content.frontend')

    <div class="peluang">
        <div class="container" style="margin-top: 12rem">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                    class="fa fa-home">&nbsp;Home</a> » <a href="" style="text-decoration: none; color: black;">Silahkan Isi
                    Data Diri Anda</a></span>
            <h2 id="makan">Pendaftaran</h2>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/store-01.png') }}" alt="" style="width: 550px">
                    <br>
                    <br>
                </div>
                <div class="col-lg-6">
                    <div class="container mt-3">
                        <form action="{{ route('store-pendaftaran') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_lengkap"><strong>Nama Lengkap</strong></label>
                                <input type="text" class="form-control" name="nama_lengkap">
                                @error('nama_lengkap')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <label for="foreign_form"><strong>Nama Kategori</strong></label>
                            <select name="foreign_form" id="foreign_form" class="custom-select">
                                <option value="">
                                    Nama Kategori
                                </option>
                                @foreach ($data_kategori as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="form-group">
                                <label for="alamat_email"><strong>Alamat Email</strong></label>
                                <input type="text" class="form-control" name="alamat_email">
                                @error('alamat_email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon"><strong>Nomor Telephone/Handphone</strong></label>
                                <input type="text" class="form-control" name="nomor_telepon">
                                @error('nomor_telepon')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="domisili"><strong>Domisili</strong></label>
                                <input type="text" class="form-control" name="domisili">
                                @error('domisili')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="diminati"><strong>Franchise yang diminati</strong></label>
                                <input type="text" class="form-control" name="diminati">
                                @error('diminati')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button class="btn btn-dark" type="submit" onclick="return confirm('Anda Yakin Sudah Benar ?')"
                                style="width: 20%">UPLOAD</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="peraturan" style="padding:4rem">
                <p>*Pihak DS|FRANCHISE tidak terlibat dalam segala aktifitas transaksi antara peminat dengan pemilik
                    perusahaan peluang bisnis yang diminati
                    <br>
                    <br>
                    *Dengan mengisi form minat ini, Anda sebagai Peminat peluang bisnis yang tercantum dalam direktori
                    DS|FRANCHISE mengetahui dan menyadari bahwa DS|FRANCHISE tidak terkait dan atau bukan
                    bagian
                    dari perusahaan peluang bisnis yang Anda minati
                </p>
            </div>
        </div>
    </div>

@endsection
