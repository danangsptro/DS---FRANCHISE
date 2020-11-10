@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-JENIS TESTIMONI')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Jenis Testimoni</h1>
        <br>
        <form action="{{ route('jenis-testimoni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_testimoni"><strong>Nama Testimoni</strong></label>
                <input type="text" class="form-control" name="nama_testimoni">
                @error('nama_testimoni')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('jenis-testimoni.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
