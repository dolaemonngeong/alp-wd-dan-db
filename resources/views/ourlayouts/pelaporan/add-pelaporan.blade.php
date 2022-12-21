@extends('layouts.app')
@section('container')
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
            <form method="POST" enctype="multipart/form-data" action="{{ route('reports.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Pelapor')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Bukti Foto')" />
                <input id="photo" class="form-control mt-1 w-full" type="file" name="image" :value="old('image')" accept="image/*" required />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <!-- Keterangan -->
            <div class="mt-4">
                <x-input-label for="desc" :value="__('Keterangan')"/>
                <x-text-input id="desc" class="block mt-1 w-full" type="text" name="description" :value="old('description')" />
                {{-- <x-input-error :messages="$errors->get('desc')" class="mt-2" /> --}}
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
@endsection