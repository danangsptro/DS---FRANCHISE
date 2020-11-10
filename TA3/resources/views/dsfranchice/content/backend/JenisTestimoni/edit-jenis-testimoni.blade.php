@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS TESTIMONI')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Edit Jenis Testimoni</h1>
        <br>
    <form action="{{route('jenis-testimoni.update', $jenis_testimoni->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_testimoni"><strong>Nama Testimoni</strong></label>
                <input type="text" class="form-control" name="nama_testimoni" value="{{ old('nama_testimoni', $jenis_testimoni->nama_testimoni) }}">
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
