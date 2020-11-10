@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | UPLOAD PELUANG USAHA')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Upload Peluang Usaha</h1>
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
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Nama Merk</th>
                            <th scope="col">Nama Pemilik</th>
                            <th scope="col">Alamat Kantor</th>
                            <th scope="col">Nomor Telephone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat Web</th>
                            <th scope="col">Minimal Investasi</th>
                            <th scope="col">Jumlah Outlet</th>
                            <th scope="col">Tahun Berdiri</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Logo Usaha</th>
                            <th scope="col">Foto Usaha</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $upload)
                            <tr>
                                <td>{{ $upload->id }}</td>
                                <td>{{ $upload->nama_perusahaan }}</td>
                                <td>{{ $upload->nama_merk }}</td>
                                <td>{{ $upload->nama_pemilik }}</td>
                                <td>{{ $upload->alamat_kantor }}</td>
                                <td>{{ $upload->nomor_telepon }}</td>
                                <td>{{ $upload->email }}</td>
                                <td>{{ $upload->alamat_web }}</td>
                                <td>{{ $upload->minimal_investasi }}</td>
                                <td>{{ $upload->jumlah_outlet }}</td>
                                <td>{{ $upload->tahun_berdiri }}</td>
                                <td>{{ $upload->kota_asal }}</td>
                                <td>
                                    <img src="{{ Storage::url('public/img-upload/') . $upload->logo_usaha }}"
                                        alt="logo_usaha" width="50px">
                                </td>
                                <td>
                                    <img src="{{ Storage::url('public/img-upload/') . $upload->foto_usaha }}"
                                        alt="foto_usaha" width="50px">
                                </td>

                                <td>
                                <a href="{{route('edit-upload', $upload->id)}}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('peluangusaha-delete', $upload->id) }}" class="d-inline"
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
