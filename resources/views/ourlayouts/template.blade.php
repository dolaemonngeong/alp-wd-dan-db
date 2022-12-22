@extends('layouts.app')
@section('container')
<div class="container-fluid p-5">
    <h1 class="fw-bold fs-1 text-center mb-3">Template Surat</h1>
    <div class="justify-content-center flex my-4">
        <a class="btn text-light" href="{{ route("letters.create")}}" role="button" style="background-color: #124A49">Unggah Surat</a>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 g-4">
        @foreach($templates as $template)
        <div class="col d-flex align-items-stretch">
            <div class="card h-100">
                <img src="{{ asset('storage/'.$template->screenshoot ) }}" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">{{$template->name}}</h5>
                    <p class="card-text mb-3 text-muted">{{$template->description}}</p>
                    <a href="{{ asset('storage/'.$template->file)}}" download type="button" class="btn btn-primary block w-100">Unduh</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
