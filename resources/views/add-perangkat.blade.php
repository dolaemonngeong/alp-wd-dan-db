<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Perangkat
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Nama')" />
                <select name="name" id="name" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    <option value="a">alabama</option>
                    <option value="a">belgia</option>
                    <option value="a">coalacomma</option>
                    <option value="a">denmark</option>
                </select>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Position -->
            <div class="mt-4">
                <x-input-label for="position" :value="__('Jabatan')" />
                <select name="position" id="position" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    <option value="a">alabama</option>
                    <option value="a">belgia</option>
                    <option value="a">coalacomma</option>
                    <option value="a">denmark</option>
                </select>
                <x-input-error :messages="$errors->get('position')" class="mt-2" />
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="startdate" :value="__('Tanggal mulai')" />
                <x-text-input id="startdate" class="block mt-1 w-full" type="date" name="startdate" :value="old('startdate')" required />
                <x-input-error :messages="$errors->get('startdate')" class="mt-2" />
            </div>

            <!-- End Date -->
            <div class="mt-4">
                <x-input-label for="enddate" :value="__('Tanggal selesai')" />
                <x-text-input id="enddate" class="block mt-1 w-full" type="date" name="enddate" :value="old('enddate')" required />
                <x-input-error :messages="$errors->get('enddate')" class="mt-2" />
            </div>

            <!-- Photo -->
            <div class="mt-4">
                <x-input-label for="photo" class="form-label" :value="__('Unggah Foto')" />
                <input id="photo" class="form-control block mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
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
@stack('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function(){
        loadData()
        $('#villager').select2();
    })
</script>