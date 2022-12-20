{{-- @extends('layouts.app')

@section('title', 'Home')

@section('container')

<form action="/jabatan" method="GET" class="form inline w-25 d-flex gap-2">
    <input type="search" placeholdeer="Search" name="search" class="form-control">
    <button type="submit" class="btn btn-outline-success">Search</button>
</form>

<table class="border-collapse border border-slate-500 ...">
    <thead>
        <tr>
            <th scope="col" class="py-3 px-6">Nomor</th>
            <th scope="col" class="py-3 px-6">Nama Jabatan</th>
            <th scope="col" class="py-3 px-6">Deskripsi</th>
            <th scope="col" class="py-3 px-6">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($positions as $position)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{ $loop->iteration }}</th>
<td class="py-4 px-6">{{ $position['name'] }}</td>
<td class="py-4 px-6">{{ $position['description'] }}</td>
<td class="py-4 px-6">
    <div class="mt-2">
        <a href="{{ route("positions.edit", $position->id) }}" type="button" class="btn text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 mr-3 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Ubah</a>
    </div>
    <div class="mt-2">
        <form action="{{ route("positions.destroy", $position->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Hapus</button>
        </form>
    </div>
</td>
</tr>
@endforeach
</tbody>
</table>

{{$positions->links('ourlayouts.custompagination')}}

{{-- @if(Auth::check() && Auth::user()->status == 'admin') --}}
{{-- <a href="{{ route("positions.create") }}" class="btn btn-outline-primary">Create</a> --}}
{{-- @endif --}}

{{-- @endsection --}}

@extends('layouts.app')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Daftar Jabatan') }}
    </h1>
    <a class="btn text-light ms-auto" href="{{ route("positions.create") }}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form action="/data-jabatan" method="GET" class="form d-flex" role="search">
        <input type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" class="form-control">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
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
                <th scope="col">Nama Jabatan</th>
                <th scope="col"></th>
                <th scope="col">Deskripsi</th>
                <th scope="col"></th>
                <th scope="col">Ubah</th>
                {{-- <th scope="col">Hapus</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($positions as $position)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td colspan="2">{{ $position['name'] }}</td>
                <td colspan="2">{{ $position['description'] }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("positions.edit", $position->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                    {{-- <a class="btn text-light" href="{{ route("positions.destroy", $position->id) }}" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></a> --}}
                </td>
                {{-- <td>    
                    {{-- <form action="{{ route("positions.destroy", $position->id) }}" method="POST">
                        @csrf
                        @method('DELETE') --}}
                        <button class="btn text-light" role="button" style="background-color: #F04A49" ><i class="fa fa-trash"></i></button>
                    {{-- </form> 
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$positions->links('ourlayouts.custompagination')}}
@endsection
