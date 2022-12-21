@extends('layouts.app')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Data Penduduk') }}
    </h1>
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="{{route("villagers.create")}}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <div class="container-fluid my-4">
    <form id="form" action="/data-penduduk" method="POST" class="form d-flex" role="search">
        @csrf
        <input id="searchInput" type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" value="{{ $search }}">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}

        {{-- <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cari</button> --}}
        {{-- </form>
    <form action="/data-penduduk" method="POST" id="filter-form">
     --}}
        {{-- <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle ml-4" type="button" data-bs-toggle="dropdown" aria-expanded="false" name="" value="status">
          
      </button>
      <ul class="dropdown-menu" name="status">
         <li><a class="dropdown-item" href="#" value="">Semua</a></li>
        <li><a class="dropdown-item" href="#" value="hidup">Hidup</a></li>
        <li><a class="dropdown-item" href="#" value="pindah">Pindah</a></li>
        <li><a class="dropdown-item" href="#" value="meninggal">Meninggal</a></li>
    </ul>
</div> --}}
        <select name="status" id="searchSelect" class="form-select" style="width: auto" aria-label="Default select example">
            {{-- <select class=""  name="status"> --}}
            <option value="#">Semua</option>
            <option value="hidup" {{ ($status == "hidup") ? 'selected' : '' }}>Hidup</option>
            <option value="pindah" {{ ($status == "pindah") ? 'selected' : '' }}>Pindah</option>
            <option value="meninggal" {{ ($status == "meninggal") ? 'selected' : '' }}>Meninggal</option>
        </select>
        <button class="btn btn-outline-secondary ml-4" type="submit" onclick="filterData()">Cari</button>

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
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                <th scope="col"> </th>
            </tr>
        </thead>
        <tbody>
            @foreach($villagers as $villager)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $villager['name'] }}</td>
                <td>{{ $villager['nik'] }}</td>
                <td>{{ $villager['birth_place']}}, {{ $villager['birth_date']}}</td>
                <td>{{ $villager['phone'] }}</td>
                <td>{{ $villager['gender'] }}</td>
                <td>{{ $villager['role'] }}</td>
                <td>{{ $villager['status'] }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("villagers.edit", $villager->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <a data-bs-toggle="modal" data-bs-target="#exampleModal{{$villager->id}}" class="btn text-light" href="#" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$villager->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            {{-- <form action="/villagertest"> --}}
                            <form action="{{ route("villagers.updatestatus") }}">
                                {{-- @csrf --}}
                                <input type='hidden' name="id" value="{{ $villager->id}}">
                                <p>Pilihlah status untuk {{ $villager['name'] }} dari penduduk?<p>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="meninggal" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Meninggal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="pindah" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Pindah
                                            </label>

                                        </div>
                                        <button type="btn" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <button type="btn submit" class="btn btn-primary">Simpan</button>

                            </form>
                            <div class="modal-footer">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </tbody>
    </table>
    {{$villagers->links('ourlayouts.custompagination')}}
</div>
@endsection
