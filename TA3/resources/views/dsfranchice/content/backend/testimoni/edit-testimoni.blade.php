@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-TESTIMONI')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Testimoni</h1>
        <br>
        <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foreign_testimoni">Nama Testimoni</label>
                <select name="foreign_testimoni" id="foreign_testimoni" class="custom-select">
                    @foreach ($data_testimoni as $dw)
                        <option value="{{ $dw->id }}"
                            {{ old('id') ?? $testimoni->foreign_testimoni == $dw->id ? 'selected' : '' }}>
                            {{ $dw->nama_testimoni }}
                        </option>
                    @endforeach
                </select>
                @error('foreign_testimoni')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foto_bukti">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img-testimoni/') . $testimoni->foto_bukti }}" alt="foto_bukti"
                    style="width: 150px"><br>
                <label for="foto_bukti">Pilihan Gambar</label>
                <input type="file" class="form-control" id="foto_bukti" name="foto_bukti">
                @error('foto_bukti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="pesan_kesan">Judul Artikel</label>
                <input type="text" class="form-control" id="pesan_kesan" name="pesan_kesan"
                    value="{{ old('pesan_kesan', $testimoni->pesan_kesan) }}">
                @error('pesan_kesan')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_mitra">Nama Mitra</label>
                <input type="text" class="form-control" id="nama_mitra" name="nama_mitra"
                    value="{{ old('nama_mitra', $testimoni->nama_mitra) }}">
                @error('nama_mitra')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('testimoni.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
