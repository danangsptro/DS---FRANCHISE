@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-MERCHANT')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Merchant</h1>
        <br>
        <form action="{{ route('merchant.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="foreign_kategori"><strong>Jenis Usaha</strong></label>
            <select name="foreign_kategori" id="foreign_kategori" class="custom-select">
                <option value="">
                    Choose Id
                </option>
                @foreach ($data_kategori as $item)
                    <option value="{{$item->id}}">
                        {{$item->nama_kategori}}
                    </option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="nama_merchant"><strong>Nama Merchant</strong></label>
                <input type="text" class="form-control" name="nama_merchant">
                @error('nama_merchant')
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
                <label for="bentuk_kerjasama"><strong>Bentuk Kerjasama</strong></label>
                <input type="text" class="form-control" name="bentuk_kerjasama">
                @error('bentuk_kerjasama')
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
                <label for="total_investasi"><strong>Total Investasi</strong></label>
                <input type="text" class="form-control" name="total_investasi">
                @error('total_investasi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_merchant"><strong>Foto Merchant</strong></label>
                <input type="file" class="form-control" name="foto_merchant">
                @error('foto_merchant')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('merchant.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
