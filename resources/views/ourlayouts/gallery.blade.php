@extends('layouts.app')

@section('title', 'Galeri Kami')

@section('container')

<h1 class="mb-3 fw-bold fs-1 text-center">Galeri Foto</h1>
@auth
<div class="justify-content-center flex my-4">
    <a class="btn text-light" href="{{ route("galleries.create")}}" role="button" style="background-color: #124A49">Tambah Gambar</a>
</div>
@endauth
<section class="mb-3" style="background: black; overflow: hidden;">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/52c44e01bb2065995311541ad5e77417-uncropped_scaled_within_1536_1152.webp" class="d-block w-100" style="opacity: 0.5">

            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/52c44e01bb2065995311541ad5e77417-uncropped_scaled_within_1536_1152.webp" class="d-block w-100" alt="..." style="opacity: 0.5">
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/52c44e01bb2065995311541ad5e77417-uncropped_scaled_within_1536_1152.webp" class="d-block w-100" alt="..." style="opacity: 0.5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<section class="container mt-4">
    {{-- <div class="row">
               <div class="col-lg-12 text-center my-2">
                  <h4>Isotope filter magical layouts with Bootstrap 4</h4>
               </div>
            </div>
            <div class="portfolio-menu mt-2 mb-4">
               <ul>
                  <li class="btn btn-outline-dark active" data-filter="*">All</li>
                  <li class="btn btn-outline-dark" data-filter=".gts">Girls T-shirt</li>
                  <li class="btn btn-outline-dark" data-filter=".lap">Laptops</li>
                  <li class="btn btn-outline-dark text" data-filter=".selfie">selfie</li>
               </ul>
            </div> --}}
    <div class="portfolio-item row">
        @foreach($galleries as $gallery)
        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
            <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                <img class="img-fluid" src="{{ asset('storage/'.$gallery->image ) }}" alt="">
            </a>
            @auth
            <div class="mt-2 flex justify-center">
                <form class="justify-center" action="{{ route("galleries.destroy", $gallery->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn text-light" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></button>
                </form>
            </div>
            @endauth
        </div>
        @endforeach
    </div>
    @endsection
