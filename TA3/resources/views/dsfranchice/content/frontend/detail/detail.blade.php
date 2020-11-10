@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'DETAIL | FRANCHISE')

@section('dsfranchice.content.frontend')

    <div class="peluang">
        <div class="container" style="margin-top: 12rem">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                    class="fa fa-home">&nbsp;Home</a> » <a href="" style="text-decoration: none; color: black;">
                    @if ($data->kategori->nama_kategori == 'F&B')
                        Makanan & Minuman
                    @else
                        Retail
                    @endif
                </a></span>

            @if ($data->kategori->nama_kategori == 'F&B')
                <h2 id="makan">Makanan & Minuman</h2>
            @else
                <h2 id="makan">Retail</h2>
            @endif
            <hr>
            <p> <svg style="color: gray; font-size:15px;" width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> by franchice &nbsp;|
                {{-- batas --}}
                <svg style="color: gray; font-size:15px;" width="2em" height="1em"
                    viewBox="0 0 16 16" class="bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                </svg> {{ substr($data->created_at, 0, 10) }}</p>
            <div class="row">
                <div class="col-lg-6" style="text-align: center" data-aos="zoom-in-right">
                    <img src="{{ Storage::url('public/img/') . $data->foto_merchant }}" alt=""
                        style="width: 550px; height:400px;">
                </div>
                <div class="col-lg-6" style="text-align: center; padding:3rem" data-aos="zoom-in-left">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                            <h3 id="fontfnb"><strong>{{$data->nama_merchant}}</strong></h3>
                            </tr>
                            <tr>
                                <td>Tahun Berdiri</td>
                                <td>{{ $data->tahun_berdiri }}</td>
                            </tr>
                            <tr>
                                <td>Bentuk Kerja Sama</td>
                                <td>{{ $data->bentuk_kerjasama }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Usaha</td>
                                <td>{{ $data->kategori->nama_kategori }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah Outlet</td>
                                <td>{{ $data->jumlah_outlet }}</td>
                            </tr>
                            <tr>
                                <td>Total Investasi</td>
                                <td>{{ $data->total_investasi }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
