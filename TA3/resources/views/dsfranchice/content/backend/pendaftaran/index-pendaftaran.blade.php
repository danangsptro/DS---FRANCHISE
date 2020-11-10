@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | MERCHANT')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Pendaftaran</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
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
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Nama Kategori</th>
                            <th scope="col">Alamat Email</th>
                            <th scope="col">Nomor Telphone</th>
                            <th scope="col">Domisili</th>
                            <th scope="col">Franchice yang diminati</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $form)
                            <tr>
                                <td>{{ $form->id }}</td>
                                <td>{{ $form->nama_lengkap }}</td>
                                <td>{{ $form->kategori->nama_kategori }}</td>
                                <td>{{ $form->alamat_email }}</td>
                                <td>{{ $form->nomor_telepon }}</td>
                                <td>{{ $form->domisili }}</td>
                                <td>{{ $form->diminati }}</td>
                                <td>
                                <a href="{{route('edit-pendaftaran', $form->id)}}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('pendaftaran-delete', $form->id) }}" class="d-inline"
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
