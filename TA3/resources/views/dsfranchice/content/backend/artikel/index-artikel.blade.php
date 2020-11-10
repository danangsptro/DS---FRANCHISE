@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | ARTIKEL')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Artikel</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
        <a href="{{ route('artikel.create') }}" class="btn btn-warning">Tambah Data</a>
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
                            <th scope="col">Artikel</th>
                            <th scope="col">Judul Artikel</th>
                            <th scope="col">Isi Artikel</th>
                            <th scope="col">Penulis Artikel</th>
                            <th scope="col">Foto Artikel</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $artikel)
                            <tr>
                                <td>{{ $artikel->id }}</td>
                                <td>{{ $artikel->jenis_artikel->nama_artikel }}</td>
                                <td>{{ $artikel->judul_artikel }}</td>
                                <td>{{ $artikel->isi_artikel }}</td>
                                <td>{{ $artikel->penulis_artikel }}</td>
                                <td><img src="{{ Storage::url('public/img-artikel/') . $artikel->foto_artikel }}"
                                        alt="foto_artikel" style="width: 100px"></td>
                                <td>
                                <a href="{{route('artikel.edit', $artikel->id)}}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('artikel.destroy', $artikel->id) }}" class="d-inline"
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
