@extends('dsfranchice.layouts.frontend.masterfrontend')
@section('title', 'AFI INSIGHT | FRANCHISE')

@section('dsfranchice.content.frontend')
    <div class="peluang">
        <div class="container" style="margin-top: 11rem">
            <span><a href="{{ route('halaman') }}" style="text-decoration: none; color: black;"
                    class="fa fa-home">&nbsp;Home</a> » <a href="" style="text-decoration: none; color:  black;">AFI
                    Insight</a></span>
            <h2 id="makan">AFI INSIGHT</h2>
            <hr>
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-6">
                        <div class="col mb-4">
                            <div class="card" data-aos="fade-up">
                                <a href="{{ route('detail-berita', $item->id) }}"> <img
                                        src="{{ Storage::url('public/img-artikel/') . $item->foto_artikel }}"
                                        class="card-img-top" alt="..." style="height:300px;"></a>
                                <div class="card-body">
                                    <a href="" style="text-decoration: none; color: black;">
                                        <h5 class="card-text">{{ $item->judul_artikel }}</h5>
                                    </a>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p><svg style="color: gray" width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-person-fill" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                </svg> by franchice</p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p style="color: gray; font-size:15px"><svg width="1em" height="1em"
                                                    viewBox="0 0 16 16" class="bi bi-clock-fill" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                                </svg>&nbsp; {{ substr($item->created_at, 0, 10) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
