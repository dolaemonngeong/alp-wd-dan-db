@extends('ourlayout.header')

@section('title', 'Home')

@section('isi')

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

@endsection
