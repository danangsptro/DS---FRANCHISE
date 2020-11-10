@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-HEADER')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Header</h1>
        <br>
        <form action="{{ route('header.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul_header"><strong>Judul Header</strong></label>
                <input type="text" class="form-control" name="judul_header">
                @error('judul_header')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('header.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
