@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-CAROUSEL')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Create Carousel</h1>
        <br>
    <form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="foto_carousel"><strong>Foto Carousel</strong></label>
                <input type="file" class="form-control" name="foto_carousel">
                @error('foto_carousel')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('carousel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
