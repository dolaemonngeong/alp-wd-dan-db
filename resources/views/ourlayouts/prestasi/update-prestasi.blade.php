@extends('layouts.app')
@section('container')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Ubah Prestasi Desa
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $achievement->name }}" required />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="image" class="form-label" :value="__('Unggah Foto')" />
                <img src="{{ asset('storage/'.$achievement->image ) }}">
                <input id="image" class="form-control mt-1 w-full" type="file" name="image" accept="image/*" required />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>

            <!-- Category -->
            <div>
                <x-input-label for="category" :value="__('Kategori')" />
                <select name="category_id" id="category_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <x-input-label for="date_achievement" :value="__('Tanggal')" />
                <x-text-input id="date_achievement" class="block mt-1 w-full" type="date" name="date_achievement" value="{{ $achievement->date_achievement }}" required />
                <x-input-error :messages="$errors->get('date_achievement')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Deskripsi')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{ $achievement->description }}" required />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
