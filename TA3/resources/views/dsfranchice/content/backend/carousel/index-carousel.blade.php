@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | CAROUSEL')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Carousel</h1>
    <br>
    <div class="container">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
    <a href="{{route('carousel.create')}}" class="btn btn-warning">Tambah Data</a>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered ftd">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Foto Carousel</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $ft)
                            <tr>
                                <td>{{ $ft->id }}</td>
                                <td>
                                <img src="{{Storage::url('public/img-carousel/'). $ft->foto_carousel}}" alt="Foto_Carousel" width="300px">
                                </td>
                                <td>
                                <a href="{{route('carousel.edit', $ft->id)}}" class="btn btn-warning">Edit</a>
                                <form action="{{route('carousel.destroy', $ft->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ADA YAKIN UNTUK MENGHAPUS?')">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
