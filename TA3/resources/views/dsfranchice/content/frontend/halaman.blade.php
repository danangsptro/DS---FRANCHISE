@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'DS | FRANCHISE')

@section('dsfranchice.content.frontend')

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 9.6rem">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner zoom-effect">
            @foreach ($carosel as $c)
                <div class="carousel-item active kotak">
                    <img src="{{ Storage::url('public/img-carousel/') . $c->foto_carousel }}" class="d-block w-100"
                        alt="...">
                </div>
            @endforeach
            @foreach ($carosel2 as $item)
                <div class="carousel-item kotak">
                    <img src="{{ Storage::url('public/img-carousel/') . $item->foto_carousel }}" class="d-block w-100"
                    alt="...">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- TUTUP carousel -->

    <!-- CONTENT  -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 zoom-effect">
                    <div class="border kotak" id="border">
                        <img src="{{ asset('assets/img/kerja.png') }}" id="img" alt="" style="margin-top: 5rem; width:200px;">
                        <h2>Cari Peluang Bisnis</h2>
                        <br>
                        <a href="{{ route('peluang') }}" class="btn btn-light"><i class="fa fa-search">&nbsp; Cari
                                Franchise</i></a>
                    </div>
                </div>
                <div class="col-lg-4 zoom-effect">
                    <div class="border kotak" id="border2">
                        <img src="{{ asset('assets/img/sama.png') }}" alt="" style="margin-top: 5rem; width:200px;">
                        <h2>Minat dengan mitra kami ?</h2>
                        <br>
                        <a href="{{ route('create-pendaftaran') }}" class="btn btn-light"><svg width="1em" height="1em"
                                viewBox="0 0 16 16" class="bi bi-check" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z" />
                            </svg>&nbsp;Silahkan Klik </i></a>
                    </div>
                </div>
                <div class="col-lg-4 zoom-effect">
                    <div class="border kotak" id="border1">
                        <img src="{{ asset('assets/img/uplod.png') }}" alt=""
                            style="margin-top: 5rem; width:200px;">
                        <h2>Upload Peluang Bisnis</h2>
                        <br>
                        <a href="{{ route('upload') }}" class="btn btn-light"><i class="fa fa-upload">&nbsp; Upload Peluang
                                Bisnis</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TUTUP CONTENT  -->


@endsection
