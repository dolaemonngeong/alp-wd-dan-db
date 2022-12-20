<<<<<<< Updated upstream:resources/views/add-keuangan.blade.php
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Keuangan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Uraian -->
            <div>
                <x-input-label for="summary" :value="__('Uraian')" />
                <x-text-input id="summary" class="block mt-1 w-full" type="text" name="summary" :value="old('summary')" required autofocus />
                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
            </div>

            <!-- Anggaran -->
            <div class="mt-4">
                <x-input-label for="budget" :value="__('Anggaran')" />
                <x-text-input id="budget" class="block mt-1 w-full" type="text" name="budget" :value="old('budget')" required />
                <x-input-error :messages="$errors->get('budget')" class="mt-2" />
            </div>

            <!-- Tanggal -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Tanggal')" />
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>

            <!-- Keterangan -->
            <div class="mt-4">
                <x-input-label for="note" :value="__('Keterangan')" />
                <x-text-input id="note" class="block mt-1 w-full" type="text" name="note" :value="old('note')" required />
                <x-input-error :messages="$errors->get('note')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
=======
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
            .login-btn{
              color: #124A49;
            }
            .login-btn:hover{
              outline: none;
              background: #124A49;
              color: white;
            }
          </style>
    </head>
    <body class="font-sans antialiased">
          @include('layouts.navbar')
        <x-guest-layout>
            <x-auth-card>
                <x-slot name="logo">
                    <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
                        Tambah Data Keuangan
                    </h1>
                </x-slot>

                <form method="POST" action="{{ route("keuangan.store") }}">
                    @csrf

                    <!-- Uraian -->
                    <div>
                        <x-input-label for="summary" :value="__('Uraian')" />
                        <x-text-input id="summary" class="block mt-1 w-full" type="text" name="summary" :value="old('summary')" required autofocus />
                        @if($errors->has('name'))
                          <p class="text-danger">{{ $errors->first('name')}}</p>
                        @endif
                    </div>

                    <!-- Volume -->
                    <div class="mt-4">
                        <x-input-label for="volume" :value="__('Volume')" />
                        <x-text-input id="volume" class="block mt-1 w-full" type="number" name="volume" :value="old('volume')" required />
                        @if($errors->has('volume'))
                          <p class="text-danger">{{ $errors->first('volume')}}</p>
                        @endif
                    </div>

                    <!-- Satuan -->
                    <div class="mt-4">
                        <x-input-label for="unit" :value="__('Satuan')" />
                        <x-text-input id="unit" class="block mt-1 w-full" type="text" name="unit" :value="old('unit')" required />
                        @if($errors->has('unit'))
                          <p class="text-danger">{{ $errors->first('unit')}}</p>
                        @endif
                    </div>

                    <!-- Tanggal -->
                    <div class="mt-4">
                        <x-input-label for="date" :value="__('Tanggal')" />
                        <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                        @if($errors->has('date'))
                          <p class="text-danger">{{ $errors->first('date')}}</p>
                        @endif
                    </div>

                    <!-- Harga Satuan -->
                    <div class="mt-4">
                        <x-input-label for="price" :value="__('Harga Satuan (Rp)')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
                        @if($errors->has('price'))
                          <p class="text-danger">{{ $errors->first('price')}}</p>
                        @endif
                    </div>

                     <!-- Jumlah -->
                     <div class="mt-4">
                        <x-input-label for="total" :value="__('Jumlah (Rp)')" />
                        <x-text-input id="total" class="block mt-1 w-full" type="text" name="total" value="{{ $volume * $price }}" required />
                        @if($errors->has('total'))
                          <p class="text-danger">{{ $errors->first('total')}}</p>
                        @endif
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                            {{ __('Tambah') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-auth-card>
        </x-guest-layout>
        @include('layouts.footer')
>>>>>>> Stashed changes:resources/views/ourlayouts/keuangan/add-keuangan.blade.php
