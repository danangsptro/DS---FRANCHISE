@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'DETAIL-BERITA | FRANCHISE')

@section('dsfranchice.content.frontend')

    <div class="peluang">
        <div class="container" style="margin-top: 12rem">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                    class="fa fa-home">&nbsp;Home</a> »
                @if ($data->jenis_artikel->nama_artikel == 'AFI Insight')
                    <a href="{{ route('afi-insight.index') }}" style="text-decoration: none; color: #FEBD01;">
                    AFI Insight</a>
                @else
                    <a href="{{route('humancapital.index')}}" style="text-decoration: none; color: #FEBD01;">Human Capital</a>
                @endif
                </a>
            </span>

            @if ($data->jenis_artikel->nama_artikel == 'AFI Insight')
                <h2 id="makan">AFI Insight</h2>
            @else
                <h2 id="makan">Human Capital</h2>
            @endif
            <hr>
            <div>
                <span class="badge badge-warning" id="berita">Berita</span>
                <svg style="color: gray; font-size:15px;" width="2em" height="1em" viewBox="0 0 16 16"
                    class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg> by franchice &nbsp;|
                {{-- batas --}}
                <svg style="color: gray; font-size:15px;" width="2em" height="1em" viewBox="0 0 16 16"
                    class="bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                </svg> {{ substr($data->created_at, 0, 10) }}
            </div><br>
            <div class="row">
                <div class="col-lg-6 zoom-effect">
                    <div class=" kotak">
                        <img src=" {{ Storage::url('public/img-artikel/') . $data->foto_artikel }}" alt=""
                            style="width: 520px; height:400px;">
                    </div>
                    <br>
                    <h5 id="editor"><strong>Editor :</strong> <span
                            style="color: #FEBD01;">{{ $data->penulis_artikel }}</span></h5>
                    <a href="#"><span class="fa fa-facebook fb"></span></a>
                    <a href="#"><span class="fa fa-twitter fb"></span></a>
                    <a href="https://api.whatsapp.com/send?text={{$data->judul_artikel}}"><span class="fa fa-whatsapp fb"></span></a>
                    <a href="#"><span class="fa fa-telegram fb"></span></a>
                </div>
                <div class="col-lg-6">
                    <h2>{{ $data->judul_artikel }}</h2>
                    <p>{!! $data->isi_artikel !!}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
