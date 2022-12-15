<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Jabatan
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Jabatan')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="desc" :value="__('Deskripsi Jabatan')" />
                <x-text-input id="desc" class="block mt-1 w-full" type="text" name="desc" :value="old('desc')" required />
                <x-input-error :messages="$errors->get('desc')" class="mt-2" />
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
