@extends('layouts.app')

@section('title', 'Update Perangkat')

@section('home')
<x-auth-card>
    <x-slot name="logo">
        <h1 class="mt-4" style="font-size: 2rem; font-weight: bolder;">
            Ubah Data Perangkat
        </h1>
    </x-slot>

    <form method="POST" enctype="multipart/form-data" action="{{ route('structures.update', $structure->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="villager_id" :value="__('Nama')" />
            <select name="villager_id" id="villager_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                @foreach($villagers as $villager)
                @if($structure->villager->id == $villager->id)
                <option value="{{ $villager->id }}" selected>{{ $villager->name }}</option>
                @else
                <option value="{{ $villager->id }}">{{ $villager->name }}</option>
                @endif
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('villager_id')" class="mt-2" />
        </div>

        <!-- Position -->
        <div class="mt-4">
            <x-input-label for="position_id" :value="__('Jabatan')" />
            <select name="position_id" id="position_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                @foreach($positions as $position)
                @if($structure->position->id == $position->id)
                <option value="{{ $position->id }}" selected>{{ $position->name }}</option>
                @else
                <option value="{{ $position->id }}">{{ $position->name }}</option>
                @endif
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('position_id')" class="mt-2" />
        </div>

        <!-- Start Date -->
        <div class="mt-4">
            <x-input-label for="appointed_date" :value="__('Tanggal mulai')" />
            <x-text-input id="appointed_date" class="block mt-1 w-full" type="date" name="appointed_date" value="{{ $structure->appointed_date }}" required />
            {{-- <x-input-error :messages="$errors->get('appointed_date')" class="mt-2" /> --}}
        </div>

        <!-- End Date -->
        <div class="mt-4">
            <x-input-label for="resign_date" :value="__('Tanggal selesai')" />
            <x-text-input id="resign_date" class="block mt-1 w-full" type="date" name="resign_date" value="{{ $structure->resign_date }}" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Photo -->
        <div class="mt-4">
            <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
            <img src="{{ asset('storage/'.$structure->image ) }}">
            {{-- <img src ="{{ asset('storage/'.$book->coverphoto)}}"> --}}
            <input id="photo" class="form-control mt-1 w-full" type="file" name="image" accept="image/*" />
            {{-- //accept="image/*" required --}}
        </div>

        <!-- Status -->
        <div class="mt-4">
            <x-input-label class="form-check-label" for="status_jabat" :value="__('Status Jabat')" />
            <div class="form-check">
                <input type="radio" class="form-check-input mr-1" type="radio" name="status_jabat" id="status_jabat1" value="Berjalan" id="flexRadioDefault2" {{ ($structure->status_jabat === "berjalan") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="status_jabat1" required>Berjalan</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input mr-1" type="radio" name="status_jabat" id="status_jabat2" value="Selesai" id="flexRadioDefault2" {{ ($structure->status_jabat === "selesai") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="status_jabat2" required>Selesai</label>
            </div>
            <x-input-error :messages="$errors->get('status_jabat')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                {{ __('Ubah') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-card>
@endsection
