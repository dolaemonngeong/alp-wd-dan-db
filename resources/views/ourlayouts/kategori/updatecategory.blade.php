@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Ubah Kategori Prestasi
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("categories.update", $category->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Kategori Prestasi')" />
                <input id="name" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="name" value="{{ $category->name }}" />
                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name')}}</p>
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
@endsection