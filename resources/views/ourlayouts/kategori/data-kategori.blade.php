@extends('layouts.app')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Daftar Kategori Prestasi') }}
    </h1>
    <a class="btn text-light ms-auto" href="{{ route("categories.create") }}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form class="d-flex" role="search">
        <input type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK...">
        <select class="form-select" style="width: auto" aria-label="Default select example">
            <option class="" href="#">Action</option>
            <option class="" href="#">Another action</option>
            <option class="" href="#">Something else here</option>
        </select>
        <button class="btn btn-outline-secondary ml-4" type="submit">Cari</button>
    </form>
</div>

<div class="overflow-x-auto my-4 shadow-md sm:rounded-lg">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Kategori Prestasi</th>
                <th scope="col"></th>
                <th scope="col">Ubah</th>
                {{-- <th scope="col">Hapus</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td colspan="2">{{ $category['name'] }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("categories.edit", $category->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                </td>
                {{-- <td>
                    <form action="{{ route("categories.destroy", $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn text-light" style="background-color: #F04A49"><i class="fa fa-trash"></i></button>
                    </form>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
