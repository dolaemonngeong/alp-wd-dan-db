<nav class="sticky-top bg-white navbar navbar-expand-lg navbar-light shadow-sm text-dark">
    <div class="container-fluid">
      <img src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt="Bootstrap" width="30" height="24">
      <a class="navbar-brand mx-2 fw-bold" href="/">
        Tulungrejo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
              <li><a class="dropdown-item" href="/#visimisi">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="/map">Peta</a></li>
              <li><a class="dropdown-item" href="/prestasi-desa">Prestasi</a></li>
              <li><a class="dropdown-item" href="/perangkat">Perangkat</a></li>
              <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
              <li><a class="dropdown-item" href="/data-penduduk/grafik">Grafik Penduduk</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/add-pelaporan">Pelaporan</a></li>
              <li><a class="dropdown-item" href="/jenis-surat">Pelayanan Surat Online</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
          @auth
          @if(auth()->user()->status == 'admin')
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Statistik
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/data-penduduk/grafik">Statistik Penduduk</a></li>
              <li><a class="dropdown-item" href="/data-pendatang/grafik">Statistik Pendatang</a></li>
            </ul>
          </li>
          @endif
          @endauth
          @auth
          @if(auth()->user()->status == 'admin')
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/admin">Admin</a>
            </li>
          @endif
          @endauth
          {{-- <li class="nav-item dropdown">
          @auth
            @if(auth()->user()->status == 'admin')
            <a class="nav-link" href="/admin" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/data-penduduk">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="/data-pendatang">Data Pendatang</a></li>
              <li><a class="dropdown-item" href="/data-keuangan">Tabel Keuangan</a></li>
              <li><a class="dropdown-item" href="/data-perangkat">Data Perangkat</a></li>
              <li><a class="dropdown-item" href="/data-jenissurat">Data Jenis Surat</a></li>
              <li><a class="dropdown-item" href="/data-surat">Data Surat Online</a></li>
              <li><a class="dropdown-item" href="/data-user">Data User</a></li>
              <li><a class="dropdown-item" href="/data-jabatan">Data Jabatan</a></li>
              <li><a class="dropdown-item" href="/data-pelaporan">Data Pelaporan</a></li>
              <li><a class="dropdown-item" href="/data-kategori">Data Kategori Prestasi</a></li>
              <li><a class="dropdown-item" href="/data-prestasi">Data Prestasi</a></li>
              <li><a class="dropdown-item" href="/data-gallery">Data Gallery</a></li>
            </ul>
            @endif
          @endauth
          </li> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Forms
              <i class="fa-solid fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/reg-penduduk">Registrasi Penduduk</a></li>
              <li><a class="dropdown-item" href="/reg-pendatang">Registrasi Pendatang</a></li>
              <li><a class="dropdown-item" href="/add-keuangan">Tambah Keuangan</a></li>
              <li><a class="dropdown-item" href="/add-perangkat">Tambah Perangkat</a></li>
              <li><a class="dropdown-item" href="/add-jabatan">Tambah Jabatan</a></li>
              <li><a class="dropdown-item" href="/add-pelaporan">Tambah Pelaporan</a></li>
              <li><a class="dropdown-item" href="/add-jenissurat">Tambah Jenis Surat</a></li>
              <li><a class="dropdown-item" href="/add-suratonline">Tambah Surat Online</a></li>
              <li><a class="dropdown-item" href="/add-gallery">Tambah Galeri</a></li>
              <li><a class="dropdown-item" href="/add-kategoriprestasi">Tambah Kategori Prestasi</a></li>
              <li><a class="dropdown-item" href="/add-prestasi">Tambah Prestasi</a></li>
            </ul>
          </li> --}}
          <li class="nav-item">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="btn logout-btn mx-2" type="submit">Logout</button>
            </form>
            @endauth
            @guest
            <a class="btn login-btn mx-2"  href="/login" role="button">Masuk</a>
            @endguest
          </li>
          <li>
              @guest
              <a class="btn logout-btn text-light" href="/register" role="button" style="background-color: #124A49">Daftar</a>
              @endguest
            </li>
        </ul>
      </div>
    </div>
</nav>

    {{-- <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid">
      <img src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt="Bootstrap" width="30" height="24">
      <a class="navbar-brand mx-2" href="/">
        Tulungrejo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Sejarah</a></li>
              <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a class="dropdown-item" href="#">Peta</a></li>
              <li><a class="dropdown-item" href="#">Prestasi</a></li>
              <li><a class="dropdown-item" href="#">Perangkat</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pelaporan</a></li>
              <li><a class="dropdown-item" href="#">Pelayanan Surat Online</a></li>
            </ul>
          </li>
          <li class="nav-item">
            @auth
                @if(auth()->user()->status == 'admin')
                    <a class="nav-link" href="/admin">Admin</a>
                @endif
            @endauth
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Admin
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/data-penduduk">Data Penduduk</a></li>
              <li><a class="dropdown-item" href="/data-pendatang">Data Pendatang</a></li>
              <li><a class="dropdown-item" href="/data-keuangan">Tabel Keuangan</a></li>
              <li><a class="dropdown-item" href="/data-perangkat">Data Perangkat</a></li>
              <li><a class="dropdown-item" href="/data-surat">Data Surat Online</a></li>
              <li><a class="dropdown-item" href="/data-user">Data User</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Forms
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/reg-penduduk">Registrasi Penduduk</a></li>
              <li><a class="dropdown-item" href="/reg-pendatang">Registrasi Pendatang</a></li>
              <li><a class="dropdown-item" href="/add-keuangan">Tambah Keuangan</a></li>
              <li><a class="dropdown-item" href="/add-perangkat">Tambah Perangkat</a></li>
              <li><a class="dropdown-item" href="#">Tambah Surat Online</a></li>
            </ul>
          </li>
          <li class="nav-item">
            @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="btn" type="submit">Logout</button>
            </form>
            @endauth
            @guest
            <a class="nav-link" href="/login">Login</a>
            @endguest
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Daftar</a>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}

    {{-- @yield('container') --}}

    {{-- @include('navhf.footer') --}}
{{-- </body> --}}
