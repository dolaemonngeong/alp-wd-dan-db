@include('layouts.app')
@section('container')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Jenis Surat
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Jenis Surat')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Description -->
            <div>
                <x-input-label for="desc" :value="__('Deskripsi')" />
                <x-text-input id="desc" class="block mt-1 w-full" type="text" name="desc" :value="old('desc')" required autofocus />
                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
            </div>

            <!-- File -->
            <div class="mt-4">
                <x-input-label for="file" class="form-label" :value="__('Unggah File')" />
                <input id="file" class="form-control mt-1 w-full" type="file" name="file" :value="old('file')" required />
                <x-input-error :messages="$errors->get('file')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Unggah Screenshot')" />
                <input id="photo" class="form-control mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
                <x-input-error :messages="$errors->get('photo')" class="mt-2" />
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