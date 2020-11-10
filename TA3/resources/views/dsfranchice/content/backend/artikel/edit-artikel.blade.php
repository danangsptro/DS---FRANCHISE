@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-ARTIKEL')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Artikel</h1>
        <br>
        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foreign_artikel">Artikel</label>
                <select name="foreign_artikel" class="custom-select">
                    @foreach ($data_artikel as $dw)
                        <option value="{{ $dw->kode_artikel }}"
                            {{ old('kode_kategori') ?? $artikel->foreign_artikel == $dw->kode_artikel ? 'selected' : '' }}>
                            {{ $dw->nama_artikel }}
                        </option>
                    @endforeach
                </select>
                @error('foreign_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="judul_artikel">Judul Artikel</label>
                <input type="text" class="form-control"  name="judul_artikel"
                    value="{{ old('penulis_artikel', $artikel->judul_artikel) }}">
                @error('judul_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="penulis_artikel">Penulis Artikel</label>
                <input type="text" class="form-control" name="penulis_artikel"
                    value="{{ old('penulis_artikel', $artikel->penulis_artikel) }}">
                @error('penulis_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="isi_artikel">Isi Artikel</label>
                <textarea id="editor1" rows="10" cols="80" class="form-control" name="isi_artikel">
                    {{$artikel->isi_artikel}}
                    @error('isi_artikel')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </textarea>
            </div>
            <div class="form-group">
                <label for="foto_artikel">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img-artikel/') . $artikel->foto_artikel }}" alt="foto_artikel"
                    style="width: 150px"><br>
                <label for="foto_artikel">Pilihan Gambar</label>
                <input type="file" class="form-control" id="foto_artikel" name="foto_artikel">
                @error('foto_artikel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('artikel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
