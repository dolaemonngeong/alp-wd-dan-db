@extends('layouts.app')

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
            <th scope="col" class="py-3 px-6">Nama Kategori</th>
            <th scope="col" class="py-3 px-6">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($achievementcategories as $achievementcategory)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-black">{{ $loop->iteration }}</th>
            <td class="py-4 px-6">{{ $achievementcategory['name'] }}</td>
            <td class="py-4 px-6">
                <div class="mt-2">
                    <a href="{{ route("achievementcategories.edit", $position->id) }}" type="button" class="btn text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 mr-3 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Ubah</a>
                </div>
                <div class="mt-2">
                    <form action="{{ route("achievementcategories.destroy", $position->id) }}" method="POST">
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
<a href="{{ route("achievementcategories.create") }}" class="btn btn-outline-primary">Create</a>
{{-- @endif --}}

@endsection
