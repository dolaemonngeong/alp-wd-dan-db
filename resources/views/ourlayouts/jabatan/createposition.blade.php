@extends('layouts.app')
@section('home')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Jabatan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("positions.store") }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Jabatan')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name')}}</p>
                @endif
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Deskripsi Jabatan')" />
                <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" :value="old('description')" required></textarea>
                @if($errors->has('description'))
                  <p class="text-danger">{{ $errors->first('description')}}</p>
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
 @endsection