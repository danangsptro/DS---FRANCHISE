@extends('dsfranchice.layouts.backend.masterbackend')
@section('title', 'ADMIN | MERCHANT')


@section('dsfranchice.content.backend')
    <br>
    <br>
    <h1 id="ftd">Table Merchant</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary">Kembali Halaman Admin</a>
        <a href="{{ route('merchant.create') }}" class="btn btn-warning">Tambah Data</a>
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

                            <th scope="col">Jenis Usaha</th>
                            <th scope="col">Nama Merchant</th>
                            <th scope="col">Tahun Berdiri</th>
                            <th scope="col">Bentuk Kerjasama</th>
                            <th scope="col">Jumlah Outlet</th>
                            <th scope="col">Total Investasi</th>
                            <th scope="col">Foto Merchant</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $merchant)
                            <tr>
                                <td>{{ $merchant->id }}</td>
                                <td>{{ $merchant->kategori->nama_kategori }}</td>
                                <td>{{ $merchant->nama_merchant }}</td>
                                <td>{{ $merchant->tahun_berdiri }}</td>
                                <td>{{ $merchant->bentuk_kerjasama }}</td>
                                <td>{{ $merchant->jumlah_outlet }}</td>
                                <td>{{ $merchant->total_investasi }}</td>
                                <td>
                                    <img src="{{ Storage::url('public/img/') . $merchant->foto_merchant }}"
                                        alt="Foto_Merchant" style="width: 100px">
                                </td>
                                <td>
                                    <a href="{{ route('merchant.edit', $merchant->id) }}" class="btn btn-warning">EDIT</a>
                                    <form action="{{ route('merchant.destroy', $merchant->id) }}" class="d-inline"
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
