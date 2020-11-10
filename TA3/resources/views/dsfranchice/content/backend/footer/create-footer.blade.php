@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CREATE-FOOTER')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Create Footer</h1>
        <br>
        <form action="{{ route('store-footer') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul_footer"><strong>Judul Footer</strong></label>
                <input type="text" class="form-control" name="judul_footer">
                @error('judul_footer')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="contact_us"><strong>Contact Us</strong></label>
                <input type="text" class="form-control" name="contact_us">
                @error('contact_us')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('halaman-footer') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
