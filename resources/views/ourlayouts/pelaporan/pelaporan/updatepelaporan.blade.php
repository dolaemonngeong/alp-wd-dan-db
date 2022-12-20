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
    @include('layouts.navbar')
    <x-guest-layout>
        <div class="ms-auto">
            <x-auth-card>
                <x-slot name="logo">
                    <h1 style="font-size: 2rem; font-weight: bolder;">
                        {{-- <img src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt="Bootstrap" width="100" height="40"> --}}
                        Pelaporan
                    </h1>
                </x-slot>

                <div>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('reports.update', $report->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nama Pelapor')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $report->name }}" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Nomor Telepon')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $report->phone }}" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Photo -->
                        <div class="mt-4">
                            <x-input-label for="photo" class="form-label" :value="__('Bukti Foto')" />
                            <img src="{{ asset('storage/'.$report->image ) }}">
                            <x-text-input id="photo" class="form-control mt-1 w-full" type="file" name="image" value="{{ $report->image }}" accept="image/*" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-input-label for="desc" :value="__('Keterangan')" />
                            <textarea id="desc" class="block mt-1 w-full" type="text" name="description" value="{{ $report->description }}"> </textarea>
                            {{-- <x-input-error :messages="$errors->get('desc')" class="mt-2" /> --}}
                        </div>

                        <!-- Proses -->
                        <div class="mt-4">
                            <x-input-label class="form-check-label" for="proses" :value="__('Proses')" />
                            <div class="form-check">
                                <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses1" value="Berjalan" id="flexRadioDefault2" {{ ($report->proses === "menunggu") ? 'checked' : '' }}>
                                <label class="form-check-label text-gray-700" for="proses1" required>Berjalan</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses2" value="Selesai" id="flexRadioDefault2" {{ ($report->proses === "selesai") ? 'checked' : '' }}>
                                <label class="form-check-label text-gray-700" for="proses2" required>Selesai</label>
                            </div>
                            <x-input-error :messages="$errors->get('proses')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                                {{ __('Tambah') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </x-auth-card>
        </div>
    </x-guest-layout>
    @include('layouts.footer')
