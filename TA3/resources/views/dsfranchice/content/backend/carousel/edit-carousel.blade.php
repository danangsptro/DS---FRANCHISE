@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-CAROUSEL')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Carousel</h1>
        <br>
    <form action="{{route('carousel.update', $carousel->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="foto_carousel">Gambar yang akan Diubah</label><br>
                <img src="{{ Storage::url('public/img-carousel/') . $carousel->foto_carousel }}" alt="foto_carousel"
                    style="width: 300px"><br>
                <label for="foto_carousel">Pilihan Gambar</label>
                <input type="file" class="form-control" id="foto_carousel" name="foto_carousel">
                @error('foto_carousel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('carousel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
