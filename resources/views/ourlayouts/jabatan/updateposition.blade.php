<<<<<<< Updated upstream
@extends('navhf.header')

@section('title', 'Jabatan')

@section('isi')
<form action="{{ route("positions.update") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>
    <input type="submit" class="btn btn-outline-success">
 </form>
 @endsection
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
            <x-auth-card>
                <x-slot name="logo">
                    <h1 style="font-size: 2rem; font-weight: bolder;">
                        {{ $maintitle }}
                    </h1>
                </x-slot>

                <form method="POST" action="{{ route("positions.update", $position->id) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nama Jabatan')" />
                        <input id="name" class="block mt-1 w-full rounded-md" type="text" name="name" value="{{ $position->name }}">
                        @if($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name')}}</p>
                        @endif
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Deskripsi Jabatan')" />
                        <input id="description" class="block mt-1 w-full rounded-md" type="text" name="description" value="{{ $position->description }}">
                        @if($errors->has('description'))
                        <p class="text-danger">{{ $errors->first('description')}}</p>
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




        {{--aslii
 @extends('layouts.app')

@section('title', 'Jabatan')

@section('container')
<form action="{{ route("positions.update", $position->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $position->name }}">
            @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label for="">description</label>
            <input type="text" name="description" class="form-control" value="{{ $position->description }}">
            @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-outline-success">Perbarui</button>
        </form>
        @endsection --}}
>>>>>>> Stashed changes
