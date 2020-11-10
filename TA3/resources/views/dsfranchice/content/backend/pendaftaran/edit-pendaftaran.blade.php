@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | EDIT-PENDAFTARAN')


@section('dsfranchice.content.backend')
    <div class="container mt-3">
        <br>
        <br>
        <h1 id="ftd">Edit Pendaftaran</h1>
        <br>
        <form action="{{ route('update-pendaftaran') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="hidden" class="form-control" name="id" value="{{ $form->id }}">
            <div class="form-group">
                <label for="nama_lengkap"><strong>Nama Lengkap</strong></label>
                <input type="text" class="form-control" name="nama_lengkap" value="{{ $form->nama_lengkap }}">
                @error('nama_lengkap')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="foreign_form">Nama Kategori</label>
                <select name="foreign_form" id="foreign_kategori" class="custom-select">
                    @foreach ($data_pendaftaran as $dw)
                        <option value="{{ $dw->kode_kategori }}"
                            {{ (old('kode_kategori') ?? $form->foreign_form == $dw->kode_kategori) ? 'selected' : '' }}>
                            {{ $dw->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                @error('foreign_form')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat_email"><strong>Alamat Email</strong></label>
                <input type="text" class="form-control" name="alamat_email" value="{{ $form->alamat_email }}">
                @error('alamat_email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nomor_telepon"><strong>Nomor Telphone</strong></label>
                <input type="text" class="form-control" name="nomor_telepon" value="{{ $form->nomor_telepon }}">
                @error('nomor_telepon')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="domisili"><strong>Domisili</strong></label>
                <input type="text" class="form-control" name="domisili" value="{{ $form->domisili }}">
                @error('domisili')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="diminati"><strong>Diminati</strong></label>
                <input type="text" class="form-control" name="diminati" value="{{ $form->diminati }}">
                @error('diminati')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('pendaftaran') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
