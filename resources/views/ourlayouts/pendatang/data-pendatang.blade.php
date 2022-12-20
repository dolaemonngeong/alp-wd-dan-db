@extends('navhf.header')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Data Pendatang') }}
    </h1>
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="{{ route("comers.create")}}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form action="/data-pendatang" method="GET" value="{{ $search }}" class="form d-flex" role="search">
        <input type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" value="{{ $search }}">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}
        {{-- <label for="sort">Urutkan usia</label> --}}
        
        <select name="sort" id="sort" class="form-select" style="width: auto" aria-label="Default select example">
            <option value="#" >Semua</option>
            <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Tertua</option>
            <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Termuda</option>
        </select>

        <button class="btn btn-outline-secondary ml-4" type="submit">Cari</button>
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
                <th scope="col">NIK</th>
                <th scope="col">Tempat Tanggal Lahir</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Penduduk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comers as $comer)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $comer['name'] }}</td>
                <td>{{ $comer['nik'] }}</td>
                <td>{{ $comer['birth_place']}}, {{ $comer['birth_date']}}</td>
                <td>{{ $comer['phone'] }}</td>
                <td>{{ $comer['gender'] }}</td>
                <td>{{ $comer['role'] }}</td>
                <td>{{ $comer->villager->name }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("comers.edit", $comer->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                    <form action="{{ route("comers.destroy", $comer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn text-light" role="button" style="background-color: #F04A49" onclick="return confirm('Yakin ingin menghapusnya?');"><i class="fa fa-trash"></i></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
