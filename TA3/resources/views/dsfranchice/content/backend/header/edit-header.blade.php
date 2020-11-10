@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-HEADER')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Edit Jenis Header</h1>
        <br>
    <form action="{{ route('header.update', $header->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul_header"><strong>Judul Header</strong></label>
                <input type="text" class="form-control" name="judul_header" value="{{ old('judul_header',  $header->judul_header )}}">
                @error('judul_header')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('jenis-artikel.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
