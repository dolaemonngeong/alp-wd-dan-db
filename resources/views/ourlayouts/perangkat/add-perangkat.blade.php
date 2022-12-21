@extends('layouts.app')
@section('home')
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Perangkat
            </h1>
        </x-slot>

        <form method="POST" enctype="multipart/form-data" action="{{ route('structures.store') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="villager_id" :value="__('Nama')" />
                <select name="villager_id" id="villager_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($villagers as $villager)
                    <option value="{{ $villager['id'] }}">{{ $villager['name'] }}</option>
                    @endforeach
                </select>
                @if($errors->has('villager_id'))
                <p class="text-danger">{{ $errors->first('villager_id')}}</p>
                @endif
            </div>

            <!-- Position -->
            <div class="mt-4">
                <x-input-label for="position_id" :value="__('Jabatan')" />
                <select name="position_id" id="position_id" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    @foreach($positions as $position)
                    <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
                    @endforeach
                </select>
                @if($errors->has('position_id'))
                <p class="text-danger">{{ $errors->first('position_id')}}</p>
                @endif
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="appointed_date" :value="__('Tanggal mulai')" />
                <x-text-input id="appointed_date" class="block mt-1 w-full" type="date" name="appointed_date" :value="old('appointed_date')" required />
                @if($errors->has('appointed_date'))
                <p class="text-danger">{{ $errors->first('appointed_date')}}</p>
                @endif
            </div>

            <!-- End Date -->
            <div class="mt-4">
                <x-input-label for="resign_date" :value="__('Tanggal selesai')" />
                <x-text-input id="resign_date" class="block mt-1 w-full" type="date" name="resign_date" :value="old('resign_date')" required />
                @if($errors->has('resign_date'))
                <p class="text-danger">{{ $errors->first('resign_date')}}</p>
                @endif
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
                <input id="photo" class="form-control mt-1 w-full" type="file" name="image" :value="old('image')" accept="image/*" required />
                {{-- //accept="image/*" required --}}
                @if($errors->has('image'))
                <p class="text-danger">{{ $errors->first('image')}}</p>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
    @endsection