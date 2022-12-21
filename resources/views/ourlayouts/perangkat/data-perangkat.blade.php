@extends('layouts.app')
@section('container')

<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Daftar Perangkat') }}
    </h1>
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="{{ route("structures.create")}}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>

<div class="container-fluid my-4">
    <form action="/data-perangkat" method="POST" class="form d-flex" role="search">
        @csrf
        <input type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" class="form-control" value="{{ $search }}">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}

        {{-- <select  > --}}
        <select name="status_jabat" id="searchSelect" class="form-select" style="width: auto" aria-label="Default select example">
            <option value="#">Semua</option>
            <option value="berjalan" {{ ($status_jabat == "berjalan") ? 'selected' : '' }}>Berjalan</option>
            <option value="selesai" {{ ($status_jabat == "selesai") ? 'selected' : '' }}>Selesai</option>
        </select>

        <button class="btn btn btn-outline-secondary ml-4" type="submit">Cari</button>
        {{-- <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cari</button> --}}

        {{-- <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle ml-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Saring
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div> --}}
    </form>
</div>
<div class="overflow-x-auto my-4 shadow-md sm:rounded-lg">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tanggal Menjabat</th>
                <th scope="col">Selesai Jabat</th>
                <th scope="col">Status</th>
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($structures as $structure)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $structure->villager->name }}</td>
                <td>{{ $structure->position->name }}</td>
                <td>{{ $structure['appointed_date'] }}</td>
                <td>{{ $structure['resign_date'] }}</td>
                <td>{{ $structure['status_jabat'] }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("structures.edit", $structure->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                    {{-- <button type="button" href="{{ route("structures.edit", $structure->id) }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 mr-3 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Ubah</button> --}}
                    {{-- <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Hapus</button> --}}
                </td>
                <td>
                    <form action="{{ route("structures.destroy", $structure->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn text-light" href="" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></a>
                            {{-- <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Hapus</button> --}}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$structures->links('ourlayouts.custompagination')}}
@endsection
