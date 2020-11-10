  <!-- HEADER  -->
  <div class="nvbr fixed-top">
      <div class="jam">
          <div class="container">
              <span><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-check-fill"
                      fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd"
                          d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                  </svg></span>&nbsp;
              <span class="f-blk" id="hari"></span>
              ,
              <span class="f-blk" id="tanggal"></span>
              <span class="f-blk" id="bulan"></span>
              <span class="f-blk" id="tahun"></span>
              /
              <span class="f-blk" id="jam"></span>
              :
              <span a class="f-blk" id="menit"></span>
              :
              <span class="f-blk" id="detik"></span>
          </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
              @foreach ($header as $h)
                  <a class="navbar-brand" href="{{ route('halaman') }}"><strong>{{ $h->judul_header }}</strong></a>
              @endforeach
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ route('halaman') }}">Home</a>
                      </li>
                      <li class="nav-item active">
                      <a class="nav-link" href="{{route('peluang')}}">Cari Peluang Bisnis</a>
                      </li>
                      <li class="nav-item active dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              News & Tips
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('afi-insight.index') }}">AFI Insight</a>
                              <a class="dropdown-item" href="{{ route('humancapital.index') }}">Human Capital</a>
                          </div>
                      </li>
                      <li class="nav-item active dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Testimoni
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('bermitra') }}">Bermitra</a>
                              <a class="dropdown-item" href="{{ route('berlanggan') }}">Berlanggan dengan kami</a>
                          </div>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="{{ route('upload') }}">Upload Peluang Bisnis</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </div>
  <!-- TUTUP HEADER  -->



  <script>
      // Hari
      arrHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"]
      Hari = new Date().getDay();
      document.getElementById("hari").innerHTML = arrHari[Hari];

      // Tanggal
      Tanggal = new Date().getDate();
      document.getElementById("tanggal").innerHTML = Tanggal;

      // Bulan
      arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
          "November", "Desember"
      ];
      Bulan = new Date().getMonth();
      document.getElementById("bulan").innerHTML = arrbulan[Bulan];

      // Tahun
      Tahun = new Date().getFullYear();
      document.getElementById("tahun").innerHTML = Tahun;

      // Jam
      window.setTimeout("waktu()", 1000);

      function addZero(i) {
          if (i < 10) {
              i = "0" + i;
          }
          return i;
      }
      function waktu() {
          var waktu = new Date();
          setTimeout("waktu()", 1000);
          document.getElementById("jam").innerHTML = addZero(waktu.getHours());
          document.getElementById("menit").innerHTML = addZero(waktu.getMinutes());
          document.getElementById("detik").innerHTML = addZero(waktu.getSeconds());
      }
    //   window.setTimeout("waktu()", 1000);

	// function waktu() {
	// 	var waktu = new Date();
	// 	setTimeout("waktu()", 1000);
	// 	document.getElementById("jam").innerHTML = waktu.getHours();
	// 	document.getElementById("menit").innerHTML = waktu.getMinutes();
	// 	document.getElementById("detik").innerHTML = waktu.getSeconds();
	// }

  </script>
