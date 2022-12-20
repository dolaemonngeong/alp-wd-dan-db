@include('layouts.navbar')
@section('container')
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
    @stack('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            loadData()
            $('#villager').select2();
        })

    </script>
   @endsection



    {{--pisahh-}}
    {{-- <head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head> --}}
    {{-- <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Data Perangkat
            </h1>
        </x-slot>
    <form method="POST" action="{{ route('structures.store') }}">
    @csrf

    <!-- Name -->
    <div class="mt-4">
        <x-input-label for="name" :value="__('Nama')" />
        <select name="name" id="name" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
            @foreach($structures as $structure)
            <option value="{{ $structure->villager->name }}">alabama</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Position -->
    <div class="mt-4">
        <x-input-label for="position" :value="__('Jabatan')" />
        <select name="position" id="position" class="js-example-basic-single block text-gray-700 mt-1 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm" required>
            @foreach($structures as $structure)
            <option value="{{ $structure->position->name }}">alabama</option>
            @endforeach
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
        <input id="photo" class="form-control mt-1 w-full" type="file" name="photo" :value="old('photo')" required />
        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
    </div>

    <div class="flex items-center justify-center mt-4">
        <x-primary-button class="justify-center w-full" style="background-color: #124A49">
            {{ __('Tambah') }}
        </x-primary-button>
    </div>
    </form>
    </x-auth-card> --}}
