@extends('ourlayout.header')

@section('title', 'Pelaporan')

@section('isi')

<table class="border-collapse border border-slate-500 ...">
  <thead>
    <tr>
      <th class="border border-slate-600 ...">Nama Pelapor</th>
      <th class="border border-slate-600 ...">Nomor Telepon</th>
      <th class="border border-slate-600 ...">Bukti Foto</th>
      <th class="border border-slate-600 ...">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-slate-700 ...">Indiana</td>
      <td class="border border-slate-700 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-slate-700 ...">Ohio</td>
      <td class="border border-slate-700 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-slate-700 ...">Michigan</td>
      <td class="border border-slate-700 ...">Detroit</td>
    </tr>
  </tbody>
</table>

@endsection
