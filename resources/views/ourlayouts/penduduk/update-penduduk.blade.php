@extends('layouts.app')
@section('title', 'Penduduk')

@section('home')
<x-auth-card>
    <x-slot name="logo">
        <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
            {{ $maintitle }}
        </h1>
    </x-slot>

    <form method="POST" action="{{ route('villagers.update', $villager->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $villager->name }}" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- NIK -->
        <div class="mt-4">
            <x-input-label for="nik" :value="__('NIK')" />
            <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" value="{{ $villager->nik }}" required />
            <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Nomor Telepon')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $villager->phone }}" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Birthplace -->
        <div class="mt-4">
            <x-input-label for="birth_place" :value="__('Tempat Lahir')" />
            <x-text-input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" value="{{ $villager->birth_place }}" required />
            <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
        </div>

        <!-- Birthdate -->
        <div class="mt-4">
            <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
            <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" value="{{ $villager->birth_date }}" required />
            <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
        </div>

        <!-- Gender -->
        <div class="mt-4">
            <x-input-label class="form-check-label" for="gender" :value="__('Jenis Kelamin')" />
            <div class="form-check form-check-inline">
                <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="gender" id="gender1" value="laki-laki" {{ ($villager->gender === "laki-laki") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="gender1" required>Laki-laki</label>
            </div>
            <div class="form-check form-check-inline" required>
                <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="gender" id="gender2" value="perempuan" {{ ($villager->gender === "perempuan") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="gender2" required>Perempuan</label>
            </div>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label class="form-check-label" for="role" :value="__('Peran')" />
            <div class="form-check form-check-inline">
                <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="pelajar" {{ ($villager->role == "pelajar") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="role1">Pelajar</label>
            </div>
            <div class="form-check form-check-inline">
                <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="pekerja" {{ ($villager->role == "pekerja") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="role2">Pekerja</label>
            </div>
            <div class="form-check form-check-inline">
                <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="lainnya" {{ ($villager->role == "lainnya") ? 'checked' : '' }}>
                <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
            </div>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                {{ __('Ubah') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-card>
@endsection



{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo"> --}}
{{-- <h1 style="font-size: 2rem; font-weight: bolder;">
    Update Penduduk
</h1> --}}
{{-- </x-slot> --}}

{{-- <form method="POST" action="{{ route('villagers.update', $villager->id) }}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="_method" value="PATCH">
<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Nama')" />
    <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $villager->name }}" required autofocus />
    @if($errors->has('name'))
    <p class="text-danger">{{ $errors->first('name')}}</p>
    @endif
</div>

<!-- NIK -->
<div class="mt-4">
    <x-input-label for="nik" :value="__('NIK')" />
    <input id="nik" class="block mt-1 w-full" type="text" name="nik" value="{{ $villager->nik }}" required />
    @if($errors->has('nik'))
    <p class="text-danger">{{ $errors->first('nik')}}</p>
    @endif </div>

<!-- Phone -->
<div class="mt-4">
    <x-input-label for="phone" :value="__('Nomor Telepon')" />
    <input id="phone" class="block mt-1 w-full" type="text" name="number" value="{{ $villager->phone }}" required />
    @if($errors->has('phone'))
    <p class="text-danger">{{ $errors->first('phone')}}</p>
    @endif
</div>

<!-- Birthplace -->
<div class="mt-4">
    <x-input-label for="birth_place" :value="__('Tempat Lahir')" />
    <input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" value="{{ $villager->birth_place }}" required />
    @if($errors->has('birth_place'))
    <p class="text-danger">{{ $errors->first('birth_place')}}</p>
    @endif
</div>

<!-- Birthdate -->
<div class="mt-4">
    <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
    <input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" value="{{ $villager->birth_date }}" required />
    @if($errors->has('birth_date'))
    <p class="text-danger">{{ $errors->first('birth_date')}}</p>
    @endif
</div>

<!-- Gender -->
<div class="mt-4">
    <x-input-label class="form-check-label" for="gender" :value="__('Jenis Kelamin')" />
    <div class="form-check form-check-inline">
        <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="gender" id="gender1" value="Laki-laki" {{ ($villager->gender === "laki-laki") ? 'checked' : '' }}>
        <label class="form-check-label text-gray-700" for="gender1" required>Laki-laki</label>

        <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="gender" id="gender2" value="Perempuan" {{ ($villager->gender === "perempuan") ? 'checked' : '' }}>
        <label class="form-check-label text-gray-700" for="gender2" required>Perempuan</label>
    </div>
    @if($errors->has('gender'))
    <p class="text-danger">{{ $errors->first('gender')}}</p>
    @endif
</div>

<!-- Role -->
<div class="mt-4">
    <x-input-label class="form-check-label" for="role" :value="__('Peran')" />
    <div class="form-check form-check-inline" required>

        <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="Pelajar" {{ ($villager->role == "pelajar") ? 'checked' : '' }}>
        <label class="form-check-label text-gray-700" for="role1">Pelajar</label>

        <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="Pekerja" {{ ($villager->role == "pekerja") ? 'checked' : '' }}>
        <label class="form-check-label text-gray-700" for="role2">Pekerja</label>

        <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="Lainnya" {{ ($villager->role == "lainnya") ? 'checked' : '' }}>
        <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
    </div>
    @if($errors->has('role'))
    <p class="text-danger">{{ $errors->first('role')}}</p>
    @endif
</div>

<div class="flex items-center justify-center mt-4">
    <button class="justify-center w-full" style="background-color: #124A49" type="submit">
        {{ __('Ubah') }}
    </button>
</div>
</form> --}}
{{-- </x-auth-card>
</x-guest-layout> --}}
