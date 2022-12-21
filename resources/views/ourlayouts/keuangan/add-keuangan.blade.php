@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder; padding-top: 2rem;">
                Tambah Data Keuangan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("finances.store") }}">
            @csrf

            <!-- Uraian -->
            <div>
                <x-input-label for="description" :value="__('Uraian')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus />
                @if($errors->has('description'))
                <p class="text-danger">{{ $errors->first('description')}}</p>
                @endif
            </div>

            <!-- Volume -->
            <div class="mt-4">
                <x-input-label for="volume" :value="__('Volume')" />
                <x-text-input id="volume" class="block mt-1 w-full" type="text" name="volume" oninput="countInputs()" :value="old('volume')" required />
                @if($errors->has('volume'))
                <p class="text-danger">{{ $errors->first('volume')}}</p>
                @endif
            </div>

            <!-- Satuan -->
            <div class="mt-4">
                <x-input-label for="unit" :value="__('Satuan')" />
                <x-text-input id="unit" class="block mt-1 w-full" type="text" name="unit" :value="old('unit')" required />
                @if($errors->has('unit'))
                <p class="text-danger">{{ $errors->first('unit')}}</p>
                @endif
            </div>

            <!-- Tanggal -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Tanggal')" />
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                @if($errors->has('date'))
                <p class="text-danger">{{ $errors->first('date')}}</p>
                @endif
            </div>

            <!-- Harga Satuan -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Harga Satuan (Rp)')" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price"  oninput="countInputs()" :value="old('price')" required />
                @if($errors->has('price'))
                <p class="text-danger">{{ $errors->first('price')}}</p>
                @endif
            </div>
            
            <script>
                function countInputs() {
                    var volume = document.getElementById("volume").value;
                    var price = document.getElementById("price").value;
                    var total = parseInt(volume) * parseInt(price);
                    document.getElementById("total").innerHTML = total;
                }

            </script>
            <!-- Jumlah -->
            <p class="mt-2 text-gray" style="font-size: 14px" name="total">Total: <span id="total" name="total"></span></p>
            {{-- <div class="mt-4">
                <x-input-label for="total" :value="__('Jumlah (Rp)')" />
                <x-text-input id="total" class="block mt-1 w-full" type="text" name="total" readonly/>
            </div> --}}
            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>


@endsection
