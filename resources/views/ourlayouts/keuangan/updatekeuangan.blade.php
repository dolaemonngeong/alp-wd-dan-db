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
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Ubah Data Keuangan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("keuangan.update", $finance->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <!-- Uraian -->
            <div>
                <x-input-label for="description" :value="__('Uraian')" />
                <input id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" value="{{ $finance->description }}" />
                @if($errors->has('description'))
                  <p class="text-danger">{{ $errors->first('description')}}</p>
                @endif
            </div>

            <!-- Volume -->
            <div>
                <x-input-label for="volume" :value="__('Volume')" />
                <input id="volume" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="volume" value="{{ $finance->volume }}" />
                @if($errors->has('volume'))
                  <p class="text-danger">{{ $errors->first('volume')}}</p>
                @endif
            </div>

            <!-- Satuan -->
            <div>
                <x-input-label for="unit" :value="__('Satuan')" />
                <input id="unit" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="unit" value="{{ $finance->unit }}" />
                @if($errors->has('unit'))
                  <p class="text-danger">{{ $errors->first('unit')}}</p>
                @endif
            </div>

            <!-- Tanggal -->
            <div>
                <x-input-label for="date" :value="__('Tanggal')" />
                <input id="date" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="date" value="{{ $finance->date }}" />
                @if($errors->has('date'))
                  <p class="text-danger">{{ $errors->first('date')}}</p>
                @endif
            </div>

            <!-- Harga Satuan -->
            <div>
                <x-input-label for="price" :value="__('Harga Satuan (Rp)')" />
                <input id="price" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="price" value="{{ $finance->price }}" />
                @if($errors->has('price'))
                  <p class="text-danger">{{ $errors->first('price')}}</p>
                @endif
            </div>

            <!-- Jumlah -->
            <div>
                <x-input-label for="total" :value="__('Jumlah (Rp)')" />
                <input id="total" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="total" value="{{ $finance->total }}" />
                @if($errors->has('total'))
                  <p class="text-danger">{{ $errors->first('total')}}</p>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@include('layouts.footer')