@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'PELUANG BISNIS | FRANCHISE ')

@section('dsfranchice.content.frontend')
    <div class="peluang" style="margin-top: 12rem">
        <div class="container">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;" class="fa fa-home">&nbsp;
                    Home</a> » <a href="" style="text-decoration: none; color: black;">Cari Peluang Bisnis</a></span>

            <div class="row">
                <div class="col-lg-6" id="peluang1">
                    <img src="{{ asset('assets/img/fnb.png') }}" alt="" style="width: 100px">
                    <br>
                    <br>
                    <p id="p">F & B</p>
                    <a href="{{ route('makanan.index') }}" class="btn btn-info" style="border-radius: 2rem" id="bt"><span
                            id="span">Lihat Franchise</span></a>
                </div>
                <div class="col-lg-6" id="peluang1">
                    <img src="{{ asset('assets/img/retail.png') }}" alt="" style="width: 100px">
                    <br>
                    <br>
                    <p id="p">Retail</p>
                    <a href="{{ route('retail.index') }}" class="btn btn-info" style="border-radius: 2rem" id="bt"><span
                            id="span">Lihat Franchise</span></a>
                </div>

            </div>
        </div>
    </div>
@endsection
