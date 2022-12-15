<x-layout>

        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Keuangan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Uraian -->
            <div>
                <x-input-label for="summary" :value="__('Uraian')" />
                <x-text-input id="summary" class="block mt-1 w-full" type="text" name="summary" :value="old('summary')" required autofocus />
                <x-input-error :messages="$errors->get('summary')" class="mt-2" />
            </div>

            <!-- Anggaran -->
            <div class="mt-4">
                <x-input-label for="budget" :value="__('Anggaran')" />
                <x-text-input id="budget" class="block mt-1 w-full" type="text" name="budget" :value="old('budget')" required />
                <x-input-error :messages="$errors->get('budget')" class="mt-2" />
            </div>

            <!-- Tanggal -->
            <div class="mt-4">
                <x-input-label for="date" :value="__('Tanggal')" />
                <x-text-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required />
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>

            <!-- Keterangan -->
            <div class="mt-4">
                <x-input-label for="note" :value="__('Keterangan')" />
                <x-text-input id="note" class="block mt-1 w-full" type="text" name="note" :value="old('note')" required />
                <x-input-error :messages="$errors->get('note')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    
</x-layout>