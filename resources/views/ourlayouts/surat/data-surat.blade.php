@extends('layouts.app')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Data Surat Online') }}
    </h1>
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="{{ route("letters.create") }}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form action="/data-surat" method="POST" class="form d-flex" role="search">
        @csrf
        <input type="search" value="{{ $search }}"class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" class="form-control">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}
        <select name="proses" id="searchSelect" class="form-select" style="width: auto" aria-label="Default select example">
            {{-- <select class=""  name="proses"> --}}
            <option value="#">Semua</option>
            <option value="selesai" {{ ($proses == "selesai") ? 'selected' : '' }}>Selesai</option>
            <option value="menunggu" {{ ($proses == "menunggu") ? 'selected' : '' }}>Menunggu</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
        {{-- <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cari</button> --}}
        
    </form>
</div>

<div class="overflow-x-auto my-4 shadow-md sm:rounded-lg">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Jenis</th>
                <th scope="col">Lampiran</th>
                <th scope="col">Pesan</th>
                <th scope="col"></th>
                <th scope="col">Selesai</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($letters as $letter)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $letter['name'] }}</td>
                <td>{{ $letter['email'] }}</td>
                <td>{{ $letter['phone'] }}</td>
                <td>{{ $letter->template->name }}</td>
                <td><a href="{{ asset('storage/'.$letter->file)}}">{{ $letter['file'] }}</a>
                </td>
                <td colspan="2">{{ $letter['message'] }}</td>
                <td>
                <input disabled style="color: #124A49;" type="checkbox" name="proses" {{ ($letter['proses'] === 'selesai') ? 'checked' : ''}}/>&nbsp;
                </td>
                <td>
                    <a class="btn text-light" href="{{ route("letters.edit", $letter->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                    {{-- <a class="btn text-light" href="{{ route("etters.destroy", $position->id) }}" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></a> --}}
                </td>
                <td>
                    <form action="{{ route("letters.destroy", $letter->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-light" style="background-color: #F04A49"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
