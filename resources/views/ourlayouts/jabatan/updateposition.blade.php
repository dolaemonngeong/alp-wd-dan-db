@extends('layouts.app')

@section('title', 'Jabatan')

@section('container')
<form action="{{ route("positions.update", $position->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $position->name }}">
        @if($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name')}}</p>
        @endif
    </div>
    <div class="mb-3">
        <label for="">description</label>
        <input type="text" name="description" class="form-control" value="{{ $position->description }}">
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description')}}</p>
        @endif
    </div>
    <button type="submit" class="btn btn-outline-success">Perbarui</button>
 </form>
 @endsection