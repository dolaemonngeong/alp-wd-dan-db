@extends('layouts.app')
@section('container')
    <x-guest-layout>
        <div class="ms-auto">
            <x-auth-card>
                <x-slot name="logo">
                    <h1 style="font-size: 2rem; font-weight: bolder;">
                        {{-- <img src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt="Bootstrap" width="100" height="40"> --}}
                        Pelaporan
                    </h1>
                </x-slot>

                <div>
                    <form method="POST" enctype="multipart/form-data" action="{{ route('reports.update', $report->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nama Pelapor')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $report->name }}" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Nomor Telepon')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $report->phone }}" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Photo -->
                        <div class="mt-4">
                            <x-input-label for="photo" class="form-label" :value="__('Bukti Foto')" />
                            <img src="{{ asset('storage/'.$report->image ) }}">
                            <x-text-input id="photo" class="form-control mt-1 w-full" type="file" name="image" value="{{ $report->image }}" accept="image/*" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-input-label for="desc" :value="__('Keterangan')" />
                            <textarea id="desc" class="block mt-1 w-full" type="text" name="description" value="{{ $report->description }}"> </textarea>
                            {{-- <x-input-error :messages="$errors->get('desc')" class="mt-2" /> --}}
                        </div>

                        <!-- Proses -->
                        <div class="mt-4">
                            <x-input-label class="form-check-label" for="proses" :value="__('Proses')" />
                            <div class="form-check">
                                <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses1" value="Berjalan" id="flexRadioDefault2" {{ ($report->proses === "menunggu") ? 'checked' : '' }}>
                                <label class="form-check-label text-gray-700" for="proses1" required>Berjalan</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input mr-1" type="radio" name="proses" id="proses2" value="Selesai" id="flexRadioDefault2" {{ ($report->proses === "selesai") ? 'checked' : '' }}>
                                <label class="form-check-label text-gray-700" for="proses2" required>Selesai</label>
                            </div>
                            <x-input-error :messages="$errors->get('proses')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                                {{ __('Tambah') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </x-auth-card>
        </div>
    </x-guest-layout>
    @endsection
