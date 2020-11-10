@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | FOOTER')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Footer</h1>
    <br>
    <div class="container">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
        <a href="{{ route('create-footer') }}" class="btn btn-warning">Tambah Data</a>
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
                            <th scope="col">Judul Footer</th>
                            <th scope="col">Contact Us</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $ft)
                            <tr>
                                <td>{{ $ft->id }}</td>
                                <td>{{ $ft->judul_footer }}</td>
                                <td>{{ $ft->contact_us }}</td>
                                <td>
                                    <a href="{{ route('edit-footer', $ft->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('footer-delete', $ft->id) }}" method="POST" class="d-inline">
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
