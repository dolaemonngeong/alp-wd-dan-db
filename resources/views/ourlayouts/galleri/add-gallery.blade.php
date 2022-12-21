@extends('layouts.app')

@section('title', 'Unggah Galeri')

@section('container')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                {{ $maintitle }}
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('galleries.store') }}">
            @csrf

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="image" class="form-label" :value="__('Unggah Foto')" />
                <input id="image" class="form-control mt-1 w-full" type="file" name="image" :value="old('image')" required />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
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