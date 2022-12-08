@extends('ourlayout.header')

@section('title', 'Home')

@section('isi')

<form action="/jabatan" method="GET" class="form inline w-25 d-flex gap-2">
    <input type="search" placeholdeer="Search" name="search" class="form-control">
    <button type="submit" class="btn btn-outline-success">Search</button>
</form>

<table class="border-collapse border border-slate-500 ...">
  <thead>
    <tr>
      <th class="border border-slate-600 ...">Nomor</th>
      <th class="border border-slate-600 ...">Nama Jabatan</th>
    </tr>
  </thead>
  <tbody>
    @foreach($positions as $position)
        <tr>
            <th class="border border-slate-700 ...">{{ $loop->iteration }}</th>
            <td class="border border-slate-700 ...">{{ $position['name'] }}</td>
        </tr>
        @endforeach
  </tbody>
</table>

{{-- @if(Auth::check() && Auth::user()->status == 'admin') --}}
  <a href="{{ route("positions.create") }}" class="btn btn-outline-primary">Create</a>
{{-- @endif --}}

@endsection
