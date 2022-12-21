@extends('layouts.app')
@section('home')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Ubah Data Keuangan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("finances.update", $finance->id) }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <!-- Uraian -->
            <div>
                <x-input-label for="description" :value="__('Uraian')" />
                <input id="description" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="description" value="{{ $finance->description }}" />
                @if($errors->has('description'))
                  <p class="text-danger">{{ $errors->first('description')}}</p>
                @endif
            </div>

            <!-- Volume -->
            <div class="mt-4">
                <x-input-label for="volume" :value="__('Volume')" />
                <input id="volume" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="volume" oninput="countInputs()" value="{{ $finance->volume }}" />
                @if($errors->has('volume'))
                  <p class="text-danger">{{ $errors->first('volume')}}</p>
                @endif
            </div>

            <!-- Satuan -->
            <div class="mt-4">
                <x-input-label for="unit" :value="__('Satuan')" />
                <input id="unit" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="unit" value="{{ $finance->unit }}" />
                @if($errors->has('unit'))
                  <p class="text-danger">{{ $errors->first('unit')}}</p>
                @endif
            </div>

            <!-- Tanggal -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Tanggal')" />
                <input id="date" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="date" name="date" value="{{ $finance->date }}" />
                @if($errors->has('date'))
                  <p class="text-danger">{{ $errors->first('date')}}</p>
                @endif
            </div>

            <!-- Harga Satuan -->
            <div class="mt-4">
                <x-input-label for="price" :value="__('Harga Satuan (Rp)')" />
                <input id="price" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="price" oninput="countInputs()" value="{{ $finance->price }}" />
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
            <p class="mt-2" style="font-size: 14px" name="total">Total Sebelumnya: {{ $finance->total}}</p>
            <p class="mt-2" style="font-size: 14px" name="total">Total: <span id="total" name="total"></span></p>
            
            {{-- <div>
                <x-input-label for="total" :value="__('Jumlah (Rp)')" />
                <input id="total" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="total" value="{{ $finance->total }}" />
                @if($errors->has('total'))
                  <p class="text-danger">{{ $errors->first('total')}}</p>
                @endif
            </div> --}}

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection