@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'BERMITRA | FRANCHISE')

@section('dsfranchice.content.frontend')
    <div class="peluang">
        <div class="container" data-aos="fade-up" style="margin-top: 12rem">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                    class="fa fa-home">&nbsp;Home</a> » <a href=""
                    style="text-decoration: none; color:  black;">Bermitra</a></span>
            <div class="row" style="margin-top: 3rem">
                <div class="col-lg-6" style="text-align: center; padding-top:4rem; font-family:Verdana">
                    <h3>Apa kata klien kami mengenai <br> DS | FRANCHISE ??</h3>
                </div>
                <div class="col-lg-6 zoom-effect">
                    <div class="kotak">
                        <img src="{{ asset('assets/img/Recipes.png') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <br>
            <hr>
            @foreach ($data as $item)
                <div class="row" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="{{ Storage::url('public/img-testimoni/') . $item->foto_bukti }}" class="card-img-top"
                            alt="..." style="height:300px;">
                    </div>
                    <div class="col-lg-8" style="margin-top: 4rem">
                        <span class="badge badge-warning" id="berita" style="width: 80px">Testimoni</span>
                        <svg style="color: gray; font-size:15px;" width="2em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg> by franchice &nbsp;| &nbsp;
                        <span style="color: gray; font-size:15px"><svg width="1em" height="1em" viewBox="0 0 16 16"
                                class="bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg>&nbsp; {{ substr($item->created_at, 0, 10) }}</span>
                        <br><br>
                        <h4><i>" {{ $item->pesan_kesan }}"</i></h4>
                        <h5 style="color: #ffc107;">- <i>{{ $item->nama_mitra }}</i></h5>
                    </div>
                    <br>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
