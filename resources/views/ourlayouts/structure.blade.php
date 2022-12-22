@extends('layouts.app')
@section('home')
<section class="team text-center py-5">
    <div class="container overflow-hidden">
        <div class="header my-5">
            <h1 class="fw-bold">Meet our Team </h1>
            <p class="text-muted">Meet and Greet our Team Members</p>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($structures as $structure)
            @if($structure->status_jabat == "berjalan")
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                <div class="img-block mb-5">
                    {{-- <img width="200" height="200" src="{{ asset('storage/'.$template->screenshoot ) }}" href="{{ asset('storage/'.$template->screenshoot)}}"> --}}
                    <img width="300" src="{{ asset('storage/'.$structure->image ) }}" href="{{ asset('storage/'.$structure->image)}}" class="img-fluid  img-thumbnail rounded-circle" alt="">
                    <div class="content mt-2">
                        <h4 class="fw-bold">{{ $structure->villager->name }}</h4>
                        <p class="text-muted"> {{ $structure->position->name }}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
