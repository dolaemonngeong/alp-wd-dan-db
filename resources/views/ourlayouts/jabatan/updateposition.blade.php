@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                {{ $theTitle }}
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("positions.update", $position->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Jabatan')" />
                <input id="name" class="block mt-1 w-full rounded-md" type="text" name="name" value="{{ $position->name }}" >
                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name')}}</p>
                @endif
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Deskripsi Jabatan')" />
                <textarea id="description" class="block mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" value="{{ $position->description }}">{{ $position->description }}</textarea>
                @if($errors->has('description'))
                  <p class="text-danger">{{ $errors->first('description')}}</p>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection

  

{{--aslii
 @extends('layouts.app')

@section('title', 'Jabatan')

@section('container')
<form action="{{ route("positions.update", $position->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $position->name }}">
        @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>
    <div class="mb-3">
        <label for="">description</label>
        <input type="text" name="description" class="form-control" value="{{ $position->description }}">
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description')}}</p>
        @endif
    </div>
    <button type="submit" class="btn btn-outline-success">Perbarui</button>
 </form>
 @endsection --}}