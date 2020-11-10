@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS ARTIKEL')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Edit Jenis Artikel</h1>
        <br>
        <form action="{{ route('jenis-artikel.update', $jenis_artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_artikel"><strong>Kode Artikel</strong></label>
                <input type="text" class="form-control" name="kode_artikel" value="{{ old('kode_artikel',  $jenis_artikel->kode_artikel )}}">
                @error('kode_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_artikel"><strong>Nama Artikel</strong></label>
                <input type="text" class="form-control" name="nama_artikel" value="{{ old('nama_artikel', $jenis_artikel->nama_artikel) }}">
                @error('nama_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('jenis-artikel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
