@extends('navhf.header')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Tabel Keuangan') }}
    </h1>
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="#" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form class="d-md-flex" role="search">
        <input type="search" class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK...">
        {{-- <select class="btn btn-outline-secondary dropdown-toggle ml-4" type="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
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
                <th scope="col">Uraian</th>
                <th scope="col"></th>
                <th scope="col">Volume</th>
                <th scope="col">Satuan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Harga Satuan (Rp)</th>
                <th scope="col">Jumlah (Rp)</th>
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($finances as $finance)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td colspan="2">{{ $finance['description'] }}</td>
                <td>{{ $finance['volume'] }}</td>
                <td>{{ $finance['unit'] }}</td>
                <td>{{ $finance['date'] }}</td>
                <td>{{ $finance['price'] }}</td>
                <td>{{ $finance['total'] }}</td>
                <td>
                    <a class="btn text-light" href="{{ route("finances.edit", $finance->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                    <form action="{{ route("finances.destroy", $finance->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn text-light" style="background-color: #F04A49"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$finances->links('ourlayouts.custompagination')}}
</div>
@endsection
