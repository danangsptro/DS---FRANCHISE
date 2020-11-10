@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-KATEGORI')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Kategori</h1>
        <br>
        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="kode_kategori"><strong>Kode Kategori</strong></label>
                <input type="text" class="form-control" name="kode_kategori">
                @error('kode_kategori')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_kategori"><strong>Nama Kategori</strong></label>
                <input type="text" class="form-control" name="nama_kategori">
                @error('nama_kategori')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
