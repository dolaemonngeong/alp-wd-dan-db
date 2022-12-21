@extends('layouts.app')
@section('container')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Kategori Prestasi
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("categories.store") }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Kategori Prestasi')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name')}}</p>
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