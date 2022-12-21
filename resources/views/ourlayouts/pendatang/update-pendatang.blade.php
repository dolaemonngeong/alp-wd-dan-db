@extends('layouts.app')
@section('container')
<x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 4rem">
                    {{$maintitle}}
                </h1>
            </x-slot>

            <form method="POST" action="{{ route('comers.update', $comer->id) }}">
                @csrf
                <input type="hidden" name="_method" value="PATCH">

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="name" value="{{ $comer->name }}" class="block mt-1 w-full" type="text" name="name" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- NIK -->
                <div class="mt-4">
                    <x-input-label for="nik" :value="__('NIK')" />
                    <x-text-input id="nik" value="{{ $comer->nik }}" class="block mt-1 w-full" type="text" name="nik" required />
                    <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                </div>

                <!-- Phone -->
                <div class="mt-4">
                    <x-input-label for="phone" :value="__('Nomor Telepon')" />
                    <x-text-input id="phone" value="{{ $comer->phone }}" class="block mt-1 w-full" type="text" name="phone" required />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <!-- Birthplace -->
                <div class="mt-4">
                    <x-input-label for="birth_place" :value="__('Tempat Lahir')" />
                    <x-text-input id="birth_place" value="{{ $comer->birth_place }}" class="block mt-1 w-full" type="text" name="birth_place" required />
                    <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                </div>

                <!-- Birthdate -->
                <div class="mt-4">
                    <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
                    <input id="birth_date" value="{{ $comer->birth_date }}" class="block mt-1 w-full" type="date" name="birth_date" required />
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>

                <!-- Villager -->
                <div class="mt-4">
                    <x-input-label for="villager_id" :value="__('Penduduk Penanggungjawab')" />
                    {{-- <x-text-input id="villager" class="block mt-1 w-full" type="text" name="villager" :value="old('villager')" required /> --}}
                    {{-- <div class="search_select_box">
                    <select data-live-search="true" id="villager" name="villager" class="block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                        <option value="A" class="text-gray-700">Ajax</option>
                        <option value="B" class="text-gray-700">Bleu</option>
                        <option value="C" class="text-gray-700">Candy</option>
                        <option value="D" class="text-gray-700">Dreus</option>
                    </select>
                </div> --}}

                    <select name="villager_id" id="villager" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                        @foreach($villagers as $villager)
                        @if($comer->villager->id == $villager->id)
                        <option value="{{ $villager->id }}" selected>{{ $villager->name }}</option>
                        @else
                        <option value="{{ $villager->id }}">{{ $villager->name }}</option>
                        @endif
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('villager')" class="mt-2" />
                </div>

                <!-- Gender -->
                <div class="mt-4">
                    <x-input-label class="form-check-label" for="gender" :value="__('Jenis Kelamin')" />
                    <div class="form-check form-check-inline">
                        <input style="color: #124A49" class="form-check-input" type="radio" name="gender" id="gender1" value = "laki-laki" {{ ($comer->gender === "laki-laki") ? 'checked' : '' }}>
                        <label class="form-check-label text-gray-700" for="gender1" required>Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input style="color: #124A49" class="form-check-input" type="radio" name="gender" id="gender1" value="perempuan" {{ ($comer->gender === "perempuan") ? 'checked' : '' }}>
                        <label class="form-check-label text-gray-700" for="gender2" required>Perempuan</label>
                    </div>
                    @if($errors->has('gender'))
                    <p class="text-danger">{{ $errors->first('gender')}}</p>
                    @endif
                </div>

                <!-- Role -->
                <div class="mt-4">
                    <x-input-label class="form-check-label" for="role" :value="__('Peran')" />
                    {{-- <div class="form-check form-check-inline" required>
                    <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="Pelajar">
                    <label class="form-check-label text-gray-700" for="role1">Pelajar</label>

                    <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="Pekerja">
                    <label class="form-check-label text-gray-700" for="role2">Pekerja</label>

                    <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="Lainnya">
                    <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
                </div> --}}
                    <div class="form-check form-check-inline">
                        <input style="color: #124A49" class="form-check-input" type="radio" name="role" id="role1" value="pelajar" {{ ($comer->role === "pelajar") ? 'checked' : '' }}>
                        <label class="form-check-label" for="role1">Pelajar</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input style="color: #124A49" class="form-check-input" type="radio" name="role" id="role2" value="pekerja" {{ ($comer->role === "pekerja") ? 'checked' : '' }}>
                        <label class="form-check-label" for="role2">Pekerja</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input style="color: #124A49" class="form-check-input" type="radio" name="role" id="role3" value="lainnya" {{ ($comer->role === "lainnya") ? 'checked' : '' }}>
                        <label class="form-check-label" for="role3">Lainnya</label>
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
    </x-guest-layout>
    @endsection