@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | JENIS ARTIKEL')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Jenis Artikel</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
        <a href="{{ route('jenis-artikel.create') }}" class="btn btn-warning">Tambah Data</a>
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
                            <th scope="col">Kode Artikel</th>
                            <th scope="col">Nama Artikel</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $jenis)
                            <tr>
                                <td>{{ $jenis->id }}</td>
                                <td>{{ $jenis->kode_artikel }}</td>
                                <td>{{ $jenis->nama_artikel }}</td>
                                <td>
                                    <a href="{{ route('jenis-artikel.edit', $jenis->id) }}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('jenis-artikel.destroy', $jenis->id) }}" class="d-inline"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS ?')">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
