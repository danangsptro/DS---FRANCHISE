@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-ARTIKEL')
@section('js')

@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Artikel</h1>
        <br>
        <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="foreign_testimoni"><strong>Jenis Testimoni</strong></label>
            <select name="foreign_testimoni" id="foreign_artikel" class="custom-select">
                <option value="">
                    Choose Id
                </option>
                @foreach ($testimoni as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nama_testimoni }}
                    </option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="foto_bukti"><strong>Foto Bukti</strong></label>
                <input type="file" class="form-control" name="foto_bukti">
                @error('foto_bukti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pesan_kesan"><strong>Pesan Kesan</strong></label>
                <input type="text" class="form-control" name="pesan_kesan">
                @error('pesan_kesan')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_mitra"><strong>Nama Mitra</strong></label>
                <input type="text" class="form-control" name="nama_mitra">
                @error('nama_mitra')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('testimoni.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
