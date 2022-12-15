@extends('layouts.app')

@section('title', 'Jabatan')

@section('container')
<form action="{{ route("positions.store") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>
    <div class="mb-3">
        <label for="">Description</label>
        <input type="text" name="description" class="form-control">
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description')}}</p>
        @endif
    </div>
    <button type="submit" class="btn btn-outline-success">Tambah</button>
 </form>
 @endsection