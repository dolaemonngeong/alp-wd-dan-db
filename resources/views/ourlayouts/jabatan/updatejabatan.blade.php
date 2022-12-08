@extends('navhf.header')

@section('title', 'Jabatan')

@section('isi')
<form action="{{ route("positions.update") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
        @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>
    <input type="submit" class="btn btn-outline-success">
 </form>
 @endsection