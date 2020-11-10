<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="#"><img src="{{ asset('assets/img/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('halaman-dasboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Table</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('kategori.index') }}">Kategori</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('merchant.index') }}">Merchant</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('jenis-artikel.index') }}">Jenis Artikel</a>
                        </li>
                        <li><i class="fa fa-table"></i><a href="{{ route('artikel.index') }}">Artikel</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('pendaftaran') }}">Form Pendaftaran</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('upload-peluang') }}">Upload Bisnis</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('carousel.index') }}">Carousel</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('jenis-testimoni.index') }}">Jenis Testimoni</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('testimoni.index') }}">Testimoni</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Layouts</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{route('header.index')}}">Header</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('halaman-footer') }}">Footer</a></li>
                    </ul>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
