@extends('layouts.app')

@section('title', 'Data Galeri')

@section('container')
<div class="overflow-x-auto my-4 shadow-md sm:rounded-lg">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Gambar</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Hapus</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $gallery)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img width="200" height="200" src="{{ asset('storage/'.$gallery->image ) }}" href="{{ asset('storage/'.$gallery->image)}}"></td>
                <td>    
                    <form action="{{ route("galleries.destroy", $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn text-light" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection