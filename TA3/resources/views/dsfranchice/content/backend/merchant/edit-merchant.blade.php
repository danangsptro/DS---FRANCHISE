@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-MERCHANT')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Merchant</h1>
        <br>
        <form action="{{ route('merchant.update', $merchant->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foreign_kategori">Jenis Usaha</label>
                <select name="foreign_kategori" id="foreign_kategori" class="custom-select">
                    @foreach ($data_merchant as $dw)
                        <option value="{{ $dw->kode_kategori }}"
                            {{ (old('kode_kategori') ?? $merchant->foreign_kategori == $dw->kode_kategori) ? 'selected' : '' }}>
                            {{ $dw->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('jenis_usaha')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_merchant">Nama Merchant</label>
                <input type="text" class="form-control" id="nama_merchant" name="nama_merchant"
                    value="{{ old('nama_merchant', $merchant->nama_merchant) }}">
                @error('nama_merchant')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun_berdiri">Tahun Berdiri</label>
                <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri"
                    value="{{ old('tahun_berdiri', $merchant->tahun_berdiri) }}">
                @error('tahun_berdiri')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bentuk_kerjasama">Bentuk Kerjasama</label>
                <input type="text" class="form-control" id="bentuk_kerjasama" name="bentuk_kerjasama"
                    value="{{ old('bentuk_kerjasama', $merchant->bentuk_kerjasama) }}">
                @error('bentuk_kerjasama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jumlah_outlet">Jumlah Outlet</label>
                <input type="text" class="form-control" id="jumlah_outlet" name="jumlah_outlet"
                    value="{{ old('jumlah_outlet', $merchant->jumlah_outlet) }}">
                @error('jumlah_outlet')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="total_investasi">Total Investasi</label>
                <input type="text" class="form-control" id="total_investasi" name="total_investasi"
                    value="{{ old('total_investasi', $merchant->total_investasi) }}">
                @error('total_investasi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_merchant">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img/') . $merchant->foto_merchant }}" alt="Foto_Merchant"
                    style="width: 150px"><br>
                <label for="foto_merchant">Pilihan Gambar</label>
                <input type="file" class="form-control" id="foto_merchant" name="foto_merchant">
                @error('foto_merchant')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('merchant.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
