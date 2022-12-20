@extends('layouts.app')
@section('container')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Prestasi Desa
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <select name="name" id="name" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    <option value="a">alabama</option>
                    <option value="a">belgia</option>
                    <option value="a">coalacomma</option>
                    <option value="a">denmark</option>
                </select>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
                <input id="photo" class="form-control mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
            </div>

            <!-- Category -->
            <div>
                <x-input-label for="category" :value="__('Kategori')" />
                <select name="category" id="category" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    <option value="a">alabama</option>
                    <option value="a">belgia</option>
                    <option value="a">coalacomma</option>
                    <option value="a">denmark</option>
                </select>
                <x-input-error :messages="$errors->get('category')" class="mt-2" />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Tanggal')" />
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="desc" :value="__('Deskripsi')" />
                <x-text-input id="desc" class="block mt-1 w-full" type="text" name="desc" :value="old('desc')" required />
                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
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