{{-- <!doctype html>
<html lang="en"> --}}

{{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans Pro&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="mydesign/desain.css">

    </head> --}}

{{-- <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans Pro&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="mydesign/desain.css">
</head> --}}
{{-- <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans Pro&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="mydesign/desain.css">
</head> --}}

{{-- <body> --}}
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
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
</nav>

    {{-- @yield('container') --}}

    {{-- @include('navhf.footer') --}}
{{-- </body> --}}
