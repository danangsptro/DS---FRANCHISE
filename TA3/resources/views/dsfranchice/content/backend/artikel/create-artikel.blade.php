@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-ARTIKEL')
@section('js')

@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Artikel</h1>
        <br>
        <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="foreign_artikel"><strong>Artikel</strong></label>
            <select name="foreign_artikel" class="custom-select">
                <option value="">
                    Choose Id
                </option>
                @foreach ($data_jenis as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->nama_artikel }}
                    </option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="judul_artikel"><strong>Judul Artikel</strong></label>
                <input type="text" class="form-control" name="judul_artikel">
                @error('judul_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_artikel"><strong>Isi Artikel</strong></label>
                <textarea id="editor1" rows="10" cols="80" class="form-control" name="isi_artikel">
                        @error('isi_artikel')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </textarea>
            </div>
            <div class="form-group">
                <label for="penulis_artikel"><strong>Penulis Artikel</strong></label>
                <input type="text" class="form-control" name="penulis_artikel">
                @error('penulis_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_artikel"><strong>Foto Artikel</strong></label>
                <input type="file" class="form-control" name="foto_artikel">
                @error('foto_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('artikel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
