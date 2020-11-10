@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | TESTIMONI')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Testimoni</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
        <a href="{{ route('testimoni.create') }}" class="btn btn-warning">Tambah Data</a>
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
                            <th scope="col">Jenis Testimoni</th>
                            <th scope="col">Foto Bukti</th>
                            <th scope="col">Pesan Kesan</th>
                            <th scope="col">Nama Mitra</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $testimoni)
                            <tr>
                                <td>{{ $testimoni->id }}</td>
                                <td>{{ $testimoni->jenis_testimoni->nama_testimoni }}</td>
                                <td><img src="{{ Storage::url('public/img-testimoni/') . $testimoni->foto_bukti }}"
                                        alt="foto_bukti" style="width: 100px"></td>
                                <td>{{ $testimoni->pesan_kesan }}</td>
                                <td>{{ $testimoni->nama_mitra }}</td>
                                <td>
                                <a href="{{route('testimoni.edit', $testimoni->id)}}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('testimoni.destroy', $testimoni->id) }}" class="d-inline"
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
