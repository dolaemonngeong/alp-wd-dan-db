@extends('layouts.app')

@section('title', 'Home')

@section('container')
<!-- Background image -->
  <div id="intro-example" class="text-center bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp'); background-repeat: no-repeat; background-blend-mode: darken; background-size: cover">
    <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3 fw-bold" style="font-size:4em;">Selamat Datang di<br>Website Resmi<br><span style="background: -webkit-linear-gradient(0.5turn, #87C790, #67AFD6); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Desa Tulungrejo</span></h1>
          <h5 class="mb-4 fs-6">
            Desa Tulungrejo, Kecamatan Pare, Kabupaten Kediri, Provinsi Jawa Timur 64212
          </h5>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>
<!-- Prestasi Desa -->
<section class="p-5">
    <h2 class="fs-2 fw-bold mb-4 text-center">Prestasi Desa</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100" style="border-radius:2.5%">
          <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="card-img-top" alt="..." style="border-radius:8px 8px 0 0">
          <div class="card-body">
            <h5 class="card-title fw-bold">Prestasi 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="border-radius:2.5%">
          <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="card-img-top" alt="..." style="border-radius:8px 8px 0 0">
          <div class="card-body">
            <h5 class="card-title fw-bold">Prestasi 2</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="border-radius:2.5%">
          <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="card-img-top" alt="..." style="border-radius:8px 8px 0 0">
          <div class="card-body">
            <h5 class="card-title fw-bold">Prestasi 3</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
</section>
<!--Visi Misi-->
<section class="p-5 h-100" id="visimisi">
    <div class="mb-5 px-5">
        <h2 class="fs-2 fw-bold mb-4 text-center">Visi</h2>
        <p class="text-center">“Berkolaborasi menuju Tulungrejo Inspiratif, Maju, Tentram, Berkelanjutan dan Menjunjung Tinggi Azas Kebersamaan serta Berbudaya Agama”</p>
    </div>
    <div class="px-5">
        <h2 class="fs-2 fw-bold mb-4 text-center">Misi</h2>
        <ul class="px-5" style="list-style: square">
            <li>Mewujudkan Pemerintah Desa Sebagai Pelayanan Prima, Bersih, Transparan Dan Akuntabilitas.</li>
            <li>Peningkatan Sumber Daya Manusia Kelompok-Kelompok Masyarakat Produktif, Peduli Lingkungan Sehat, Nyaman, Bersih, Indah, Tentram, Patus Agama Dan Berkelanjutan.</li>
            <li>Peningkatan Pelayanan Infrastruktur Masyarakat Berkualitas Sesuai Kebutuhan Masyarakat Dalam Bidang Transportasi Jalan, Penanganan Limbah, Penyediaan Sarana Prasarana Kesehatan Dan Keamanan Dan Fasilitas Umum.</li>
            <li>Peningkatan Kesejahteraan Ekonomi Masyarakat Kawasan Pertanian, Wisata, Pendidikan Dan Perdagangan.</li>
        </ul>
    </div>
</section>
<section class="p-5">
    <h2 class="fs-2 fw-bold mb-4 text-center">Perangkat Desa</h2>
    <div class="row row-cols-1 g-4 my-4">
      <div class="d-flex col justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flower.webp" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body h-100">
                <h5 class="card-title fw-bold">Kepala Desa</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
    <div class="row row-cols-1 g-3">
      <div class="d-flex col justify-content-center">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body h-100">
                <h5 class="card-title fw-bold">Sekretaris Desa</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/Flower.webp" class="img-fluid rounded-end" alt="...">
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

@endsection