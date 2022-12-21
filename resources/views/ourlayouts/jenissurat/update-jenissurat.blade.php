@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 class="pt-4" style="font-size: 2rem; font-weight: bolder;">
        {{$maintitle}}
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('templates.update', $template->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">


            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Jenis Surat')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $template->name }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Deskripsi')" />
                <textarea id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" value="{{ $template->description }}" required autofocus>{{ $template->description }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

            <!-- File -->
            <div class="mt-4">
                <x-input-label for="file" class="form-label" :value="__('Unggah File')" />
                <a href="{{ asset('storage/'.$template->file)}}">{{ $template['file'] }}</a>
                <input id="file" class="form-control mt-1 w-full" type="file" name="file" :value="old('file')" accept=".pdf, .doc, .docx"  />
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="screenshot" class="form-label" :value="__('Unggah Screenshot')" />
                <img src="{{ asset('storage/'.$template->screenshoot ) }}">
                <input id="screenshot" class="form-control mt-1 w-full" type="file" name="screenshoot" :value="old('screenshoot')" accept="image/*"  />
                <x-input-error :messages="$errors->get('screenshot')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Ubah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
    </x-guest-layout>
@endsection