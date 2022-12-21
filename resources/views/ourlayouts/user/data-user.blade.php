@extends('layouts.app')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold; font-size: 35px;">
        {{ __('Daftar User') }}
    </h1>
    {{-- <div class="ms-auto">
        <input type="button" class="btn btn-dark text-white text-sm rounded-md" href="{{ route('login') }}" value="Tambah Data"/>
    </div> --}}
</div>
<div class="container-fluid mt-8">
    <form class="d-flex" role="search">
      <input class="block me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Cari</button>
      {{-- <div class="dropdown">
        <button class="btn btn-outline-dark dropdown-toggle ml-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['status'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$users->links('ourlayouts.custompagination')}}
@endsection