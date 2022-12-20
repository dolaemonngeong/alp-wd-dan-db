<<<<<<< Updated upstream
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Registrasi Penduduk
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf
=======
@extends('layouts.app')
@section('title', 'Penduduk')

@section('container')
        <div>
            <x-auth-card>
                <x-slot name="logo">
                    <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
                        {{ $maintitle }}
                    </h1>
                </x-slot>

                <form method="POST" action="{{ route('villagers.store') }}">
                    @csrf
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- NIK -->
                    <div class="mt-4">
                        <x-input-label for="nik" :value="__('NIK')" />
                        <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required />
                        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div class="mt-4">
                        <x-input-label for="phone" :value="__('Nomor Telepon')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Birthplace -->
                    <div class="mt-4">
                        <x-input-label for="birth_place" :value="__('Tempat Lahir')" />
                        <x-text-input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" :value="old('birth_place')" required />
                        <x-input-error :messages="$errors->get('birth_place')" class="mt-2" />
                    </div>

                    <!-- Birthdate -->
                    <div class="mt-4">
                        <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
                        <x-text-input id="birth_date" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required />
                        <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                    </div>

                    <!-- Gender -->
                    <div class="mt-4">
                        <x-input-label class="form-check-label" for="gender" :value="__('Jenis Kelamin')" />
                        <div class="form-check form-check-inline">
                            <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="gender" id="gender1" value="laki-laki">
                            <label class="form-check-label text-gray-700" for="gender1" required>Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline" required>
                            <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="gender" id="gender2" value="perempuan">
                            <label class="form-check-label text-gray-700" for="gender2" required>Perempuan</label>
                        </div>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />      
                    </div>

                    <!-- Role -->
                    <div class="mt-4">
                        <x-input-label class="form-check-label" for="role" :value="__('Peran')" />
                        <div class="form-check form-check-inline">
                            <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="pelajar">
                            <label class="form-check-label text-gray-700" for="role1">Pelajar</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="pekerja">
                            <label class="form-check-label text-gray-700" for="role2">Pekerja</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="lainnya">
                            <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
                        </div>
                        <x-input-error :messages="$errors->get('role')" class="mt-2"/>
                    </div>

                    <div class="flex items-center justify-center mt-4">
                        <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                            {{ __('Tambah') }}
                        </x-primary-button>
                    </div>
                </form>
            </x-auth-card>
        </div>
        
        @endsection



{{-- yang lamaaa
 <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo"> --}}
{{-- <h1 style="font-size: 2rem; font-weight: bolder;">
    Registrasi Penduduk
</h1> --}}
{{-- </x-slot> --}}

{{-- <form method="POST" action="{{ route('villagers.store') }}">
    @csrf
>>>>>>> Stashed changes

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- NIK -->
            <div class="mt-4">
                <x-input-label for="nik" :value="__('NIK')" />
                <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required />
                <x-input-error :messages="$errors->get('nik')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>

            <!-- Birthplace -->
            <div class="mt-4">
                <x-input-label for="birthplace" :value="__('Tempat Lahir')" />
                <x-text-input id="birthplace" class="block mt-1 w-full" type="text" name="birthplace" :value="old('birthplace')" required />
                <x-input-error :messages="$errors->get('birthplace')" class="mt-2" />
            </div>

            <!-- Birthdate -->
            <div class="mt-4">
                <x-input-label for="birthdate" :value="__('Tanggal Lahir')" />
                <x-text-input id="birthdate" class="block mt-1 w-full" type="text" name="birthdate" :value="old('birthdate')" required />
                <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <x-input-label class="form-check-label" for="gender" :value="__('Jenis Kelamin')" />
                <div class="form-check form-check-inline">
                    <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="gender" id="gender1" value="Laki-laki">
                    <label class="form-check-label text-gray-700" for="gender1" required>Laki-laki</label>

                    <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="gender" id="gender2" value="Perempuan">
                    <label class="form-check-label text-gray-700" for="gender2" required>Perempuan</label>
                </div>
                <x-input-error :messages="$errors->get('gender')" class="mt-2" />      
            </div>

            <!-- Role -->
            <div class="mt-4">
                <x-input-label class="form-check-label" for="role" :value="__('Peran')" />
                <div class="form-check form-check-inline" required>
                    <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="Pelajar">
                    <label class="form-check-label text-gray-700" for="role1">Pelajar</label>

                    <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="Pekerja">
                    <label class="form-check-label text-gray-700" for="role2">Pekerja</label>

                    <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="Lainnya">
                    <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
                </div>
                <x-input-error :messages="$errors->get('role')" class="mt-2"/>
            </div>

<<<<<<< Updated upstream
            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
=======
    <div class="flex items-center justify-center mt-4">
        <button class="justify-center w-full" style="background-color: #124A49" type="submit">
            {{ __('Tambah') }}
        </button>
    </div>
</form> --}}
{{-- </x-auth-card>
</x-guest-layout> --}}
>>>>>>> Stashed changes
