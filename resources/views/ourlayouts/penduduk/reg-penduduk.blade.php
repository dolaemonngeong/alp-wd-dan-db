{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo"> --}}
<h1 style="font-size: 2rem; font-weight: bolder;">
    Registrasi Penduduk
</h1>
{{-- </x-slot> --}}

<form method="POST" action="{{ route('villager.store') }}">
    @csrf

    <!-- Name -->
    <div>
        <label for="name" :value="__('Nama')" />
        <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        @if($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>

    <!-- NIK -->
    <div class="mt-4">
        <x-input-label for="nik" :value="__('NIK')" />
        <input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required />
        @if($errors->has('nik'))
        <p class="text-danger">{{ $errors->first('nik')}}</p>
        @endif </div>

    <!-- Phone -->
    <div class="mt-4">
        <x-input-label for="phone" :value="__('Nomor Telepon')" />
        <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
        @if($errors->has('phone'))
        <p class="text-danger">{{ $errors->first('phone')}}</p>
        @endif>
    </div>

    <!-- Birthplace -->
    <div class="mt-4">
        <x-input-label for="birth_place" :value="__('Tempat Lahir')" />
        <input id="birth_place" class="block mt-1 w-full" type="text" name="birth_place" :value="old('birth_place')" required />
        @if($errors->has('birth_place'))
        <p class="text-danger">{{ $errors->first('birth_place')}}</p>
        @endif" />
    </div>

    <!-- Birthdate -->
    <div class="mt-4">
        <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
        <input id="birth_date" class="block mt-1 w-full" type="text" name="birth_date" :value="old('birth_date')" required />
        @if($errors->has('name'))
        <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif" />
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
        @if($errors->has('gender'))
        <p class="text-danger">{{ $errors->first('gender')}}</p>
        @endif/>
    </div>

    <!-- Role -->
    <div class="mt-4">
        <label class="form-check-label" for="role" :value="__('Peran')"></label>
        <div class="form-check form-check-inline" required>
            <input style="color: #124A49" class="form-check-input mr-1" type="radio" name="role" id="role1" value="Pelajar">
            <label class="form-check-label text-gray-700" for="role1">Pelajar</label>

            <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role2" value="Pekerja">
            <label class="form-check-label text-gray-700" for="role2">Pekerja</label>

            <input style="color: #124A49" class="form-check-input ml-4 mr-1" type="radio" name="role" id="role3" value="Lainnya">
            <label class="form-check-label text-gray-700" for="role3">Lainnya</label>
        </div>
        @if($errors->has('role'))
        <p class="text-danger">{{ $errors->first('role')}}</p>
        @endif
    </div>

    <div class="flex items-center justify-center mt-4">
        <button class="justify-center w-full" style="background-color: #124A49" type="submit">
            {{ __('Tambah') }}
        </button>
    </div>
</form>
{{-- </x-auth-card>
</x-guest-layout> --}}
