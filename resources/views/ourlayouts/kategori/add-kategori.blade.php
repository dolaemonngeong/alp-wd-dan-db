@extends('layouts.app')
@section('container')

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 style="font-size: 2rem; font-weight: bolder;">
                Tambah Kategori Prestasi
            </h1>
        </x-slot>

        <form method="POST" action="{{ route("categories.store") }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama Kategori Prestasi')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                @if($errors->has('name'))
                  <p class="text-danger">{{ $errors->first('name')}}</p>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">
                <x-primary-button class="justify-center w-full" style="background-color: #124A49">
                    {{ __('Tambah') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<!-- Footer -->
<footer class="text-center mt-4 pt-2 text-lg-start text-muted" style="background-color: white">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5" style="background-color: white">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4" style="font-size: 20px; color:#124A49;">
              Tulungrejo
            </h6>
            <p>
              Desa yang terletak di Kecamatan Pare, Kabupaten Kediri, Jawa Timur, Indonesia. 
              Di Desa Tulungrejo terdapat sejumlah tempat kursus dan lembaga pendidikan yang 
              menawarkan belajar bahasa Inggris. Pada akhirnya lembaga belajar bahasa Inggris 
              tersebut bertransformasi menjadi Kampung Inggris Pare.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4 text-dark">
              Profil
            </h6>
            <p>
              <a href="#!" class="text-reset">Visi Misi</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Prestasi Desa</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Peta Desa</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Perangkat Desa</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Galeri</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4  text-dark">
              Layanan
            </h6>
            <p>
              <a href="#!" class="text-reset">Pelaporan</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Pelayanan Surat Online</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4  text-dark">Media Sosial</h6>
            {{-- Icons --}}
            <a href="#"><p><i class="fa-brands fa-square-facebook me-3"></i>Facebook</p></a>
            <a href="#"><p><i class="fa-brands fa-square-instagram me-3"></i>Instagram</p></a>
            <a href="#"><p><i class="fa-brands fa-square-twitter me-3"></i>Twitter</p></a>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.5);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Tulungrejo</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->