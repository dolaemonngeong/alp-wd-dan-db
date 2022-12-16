<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/public/css/dropdown-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <style>
        .login-btn {
            color: #124A49;
        }

        .login-btn:hover {
            outline: none;
            background: #124A49;
            color: white;
        }

    </style>

</head>
<body class="font-sans antialiased">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm text-dark">
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
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                            <i class="fa-solid fa-angle-down"></i>
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
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Layanan
                            <i class="fa-solid fa-angle-down"></i>
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
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/data-penduduk">Data Penduduk</a></li>
                            <li><a class="dropdown-item" href="/data-pendatang">Data Pendatang</a></li>
                            <li><a class="dropdown-item" href="/data-keuangan">Tabel Keuangan</a></li>
                            <li><a class="dropdown-item" href="/data-perangkat">Data Perangkat</a></li>
                            <li><a class="dropdown-item" href="/data-surat">Data Surat Online</a></li>
                            <li><a class="dropdown-item" href="/data-user">Data User</a></li>
                            <li><a class="dropdown-item" href="/data-jabatan">Data Jabatan</a></li>
                            <li><a class="dropdown-item" href="/data-pelaporan">Data Pelaporan</a></li>
                            <li><a class="dropdown-item" href="/data-kategoriprestasi">Data Kategori Prestasi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
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
                    </li>
                    <li class="nav-item">
                        @auth
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn logout-btn mx-2" type="submit">Logout</button>
                        </form>
                        @endauth
                        @guest
                        <a class="btn login-btn mx-2" href="/login" role="button">Masuk</a>
                        @endguest
                    </li>
                    <li>
                        {{-- <a action="/register"> --}}
                        <a class="btn logout-btn text-light" href="/register" role="button" style="background-color: #124A49">Daftar</a>
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Perangkat
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('structures.store') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="villager_id" :value="__('Nama')" />
                <select name="villager_id" id="villager_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($villagers as $villager)
                    <option value="{{ $villager['id'] }}">{{ $villager['name'] }}</option>
                    @endforeach
                </select>
                @if($errors->has('villager_id'))
                <p class="text-danger">{{ $errors->first('villager_id')}}</p>
                @endif
            </div>

            <!-- Position -->
            <div class="mt-4">
                <x-input-label for="position_id" :value="__('Jabatan')" />
                <select name="position_id" id="position_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($positions as $position)
                    <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
                    @endforeach
                </select>
                @if($errors->has('position_id'))
                <p class="text-danger">{{ $errors->first('position_id')}}</p>
                @endif
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="appointed_date" :value="__('Tanggal mulai')" />
                <x-text-input id="appointed_date" class="block mt-1 w-full" type="date" name="appointed_date" :value="old('appointed_date')" required />
                @if($errors->has('appointed_date'))
                <p class="text-danger">{{ $errors->first('appointed_date')}}</p>
                @endif
            </div>

            <!-- End Date -->
            <div class="mt-4">
                <x-input-label for="resign_date" :value="__('Tanggal selesai')" />
                <x-text-input id="resign_date" class="block mt-1 w-full" type="date" name="resign_date" :value="old('resign_date')" required />
                @if($errors->has('resign_date'))
                <p class="text-danger">{{ $errors->first('resign_date')}}</p>
                @endif
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
                <input id="photo" class="form-control mt-1 w-full" type="file" name="image" :value="old('image')" accept="image/*" required />
                {{-- //accept="image/*" required --}}
                @if($errors->has('position_id'))
                <p class="text-danger">{{ $errors->first('position_id')}}</p>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
    <!-- Footer -->
    <footer class="text-center mt-4 pt-2 text-lg-start text-muted" style="background-color: white">
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5" style="background-color: white">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4" style="font-size: 20px; color:#124A49;">
                            Tulungrejo
                        </h6>
                        <p>
                            Desa yang terletak di Kecamatan Pare, Kabupaten Kediri, Jawa Timur, Indonesia.
                            Di Desa Tulungrejo terdapat sejumlah tempat kursus dan lembaga pendidikan yang
                            menawarkan belajar bahasa Inggris. Pada akhirnya lembaga belajar bahasa Inggris
                            tersebut bertransformasi menjadi Kampung Inggris Pare.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 text-dark">
                            Profil
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Visi Misi</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Prestasi Desa</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Peta Desa</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Perangkat Desa</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4  text-dark">
                            Layanan
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pelaporan</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Pelayanan Surat Online</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4  text-dark">Media Sosial</h6>
                        {{-- Icons --}}
                        <a href="#">
                            <p><i class="fa-brands fa-square-facebook me-3"></i>Facebook</p>
                        </a>
                        <a href="#">
                            <p><i class="fa-brands fa-square-instagram me-3"></i>Instagram</p>
                        </a>
                        <a href="#">
                            <p><i class="fa-brands fa-square-twitter me-3"></i>Twitter</p>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.5);">
            © 2022 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Tulungrejo</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->



    {{--pisahh-}}
    {{-- <head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head> --}}
    {{-- <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Perangkat
            </h1>
        </x-slot>
    <form method="POST" action="{{ route('structures.store') }}">
    @csrf

    <!-- Name -->
    <div class="mt-4">
        <x-input-label for="name" :value="__('Nama')" />
        <select name="name" id="name" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
            @foreach($structures as $structure)
            <option value="{{ $structure->villager->name }}">alabama</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Position -->
    <div class="mt-4">
        <x-input-label for="position" :value="__('Jabatan')" />
        <select name="position" id="position" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
            @foreach($structures as $structure)
            <option value="{{ $structure->position->name }}">alabama</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('position')" class="mt-2" />
    </div>

    <!-- Start Date -->
    <div class="mt-4">
        <x-input-label for="startdate" :value="__('Tanggal mulai')" />
        <x-text-input id="startdate" class="block mt-1 w-full" type="date" name="startdate" :value="old('startdate')" required />
        <x-input-error :messages="$errors->get('startdate')" class="mt-2" />
    </div>

    <!-- End Date -->
    <div class="mt-4">
        <x-input-label for="enddate" :value="__('Tanggal selesai')" />
        <x-text-input id="enddate" class="block mt-1 w-full" type="date" name="enddate" :value="old('enddate')" required />
        <x-input-error :messages="$errors->get('enddate')" class="mt-2" />
    </div>

    <!-- Photo -->
    <div class="mt-4">
        <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
        <input id="photo" class="form-control mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
    </div>

    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="justify-center w-full" style="background-color: #124A49">
            {{ __('Tambah') }}
        </x-primary-button>
    </div>
    </form>
    </x-auth-card> --}}
    {{-- @stack('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        loadData()
        $('#villager').select2();
    })
</script> --}}
