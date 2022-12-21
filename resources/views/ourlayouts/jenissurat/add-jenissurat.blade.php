@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
        {{$maintitle}}
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('templates.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Jenis Surat')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Deskripsi')" />
                <textarea id="description" class="form-control block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" :value="old('description')" required autofocus></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- File -->
            <div class="mt-4">
                <x-input-label for="file" class="form-label" :value="__('Unggah File')" />
                <input id="file" class="form-control mt-1 w-full" type="file" name="file" :value="old('file')" accept=".pdf, .doc, .docx" required />
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="screenshot" class="form-label" :value="__('Unggah Screenshot')" />
                <input id="screenshot" class="form-control mt-1 w-full" type="file" name="screenshoot" :value="old('screenshoot')" accept="image/*" required />
                <x-input-error :messages="$errors->get('screenshot')" class="mt-2" />
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