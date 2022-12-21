@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
                {{ $maintitle}}
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('letters.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Template -->
            <div class="mt-4">
                <x-input-label for="template_id" :value="__('Jenis Surat')" />
             <select name="template_id" id="template_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                        @foreach($templates as $template)
                        <option value="{{ $template['id'] }}">{{ $template['name'] }}</option>
                        @endforeach
                    </select>
                <x-input-error :messages="$errors->get('template_id')" class="mt-2" />
            </div>

            <!-- File -->
            <div class="mt-4">
                <x-input-label for="file" class="form-label" :value="__('Unggah File')" />
                <input id="file" class="form-control mt-1 w-full" type="file" name="file" :value="old('file')" accept=".pdf, .doc, .docx" required />
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>

            <!-- Message -->
            <div class="mt-4">
                <x-input-label for="message" :value="__('Pesan')" />
                <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" :value="old('message')"  />
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

{{-- <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div> --}}

@endsection