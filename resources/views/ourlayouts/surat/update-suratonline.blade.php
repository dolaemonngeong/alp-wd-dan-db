@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
                {{ $maintitle}}
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('letters.update', $letter->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $letter->name }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $letter->email }}" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $letter->phone }}" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Template -->
            <div class="mt-4">
                <select name="template_id" id="template_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($templates as $template)
                    @if($letter->template->id == $template->id)
                    <option value="{{ $template->id }}" selected>{{ $template->name }}</option>
                    @else
                    <option value="{{ $template->id }}">{{ $template->name }}</option>
                    @endif
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('template_id')" class="mt-2" />
            </div>

            <!-- File -->
            <div class="mt-4">
                <x-input-label for="file" class="form-label" :value="__('Unggah File')" />
                <a href="{{ asset('storage/'.$letter->file)}}">{{ $letter['file'] }}</a>
                <input id="file" class="form-control mt-1 w-full" type="file" name="file" :value="old('file')" accept=".pdf, .doc, .docx"  />
            </div>

            <!-- Message -->
            <div class="mt-4">
                <x-input-label for="message" :value="__('Pesan')" />
                <x-text-input id="message" class="block mt-1 w-full" type="text" name="message" value="{{ $letter->message }}" />
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <!-- Proses -->
            <div class="mt-4">
                <x-input-label class="form-check-label" for="proses" :value="__('Proses')" />
                <div class="form-check">
                    <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses1" value="menunggu" id="flexRadioDefault2" {{ ($letter->proses === "menunggu") ? 'checked' : '' }}>
                    <label class="form-check-label text-gray-700" for="proses1" required>Berjalan</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses2" value="selesai" id="flexRadioDefault2" {{ ($letter->proses === "selesai") ? 'checked' : '' }}>
                    <label class="form-check-label text-gray-700" for="proses2" required>Selesai</label>
                </div>
                <x-input-error :messages="$errors->get('proses')" class="mt-2" />
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
