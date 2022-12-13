<head>
    <link rel="stylesheet" href="/public/css/dropdown-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Registrasi Pendatang
            </h1>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
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

            <!-- Villager -->
            <div class="mt-4">
                <x-input-label for="villager" :value="__('Penduduk Penanggungjawab')" />
                {{-- <x-text-input id="villager" class="block mt-1 w-full" type="text" name="villager" :value="old('villager')" required /> --}}
                {{-- <div class="search_select_box">
                    <select data-live-search="true" id="villager" name="villager" class="block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                        <option value="A" class="text-gray-700">Ajax</option>
                        <option value="B" class="text-gray-700">Bleu</option>
                        <option value="C" class="text-gray-700">Candy</option>
                        <option value="D" class="text-gray-700">Dreus</option>
                    </select>
                </div> --}}
                <select name="villager" id="villager" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
                    <option value="a">alabama</option>
                    <option value="a">belgia</option>
                    <option value="a">coalacomma</option>
                    <option value="a">denmark</option>
                </select>
                <x-input-error :messages="$errors->get('villager')" class="mt-2" />
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="/public/js/dropdown-form.js"></script>

<script>
    $(document).ready(function(){
        loadData()
        $('#villager').select2();
    })
</script>