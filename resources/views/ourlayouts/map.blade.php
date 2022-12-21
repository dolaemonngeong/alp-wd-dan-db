@extends('layouts.app')
@section('home')   
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.slim.min.js" integrity="sha512-1e7eG2wdX0SfkBsRkR+ETYdfg0UfcdMpYeH0FXKFCceSJkB9jzetxVpUvNAgTuUfJDhbRQdkuLvylB7U2N2uhg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <style>
            .nav-pills-custom .map-link {
                color: #124A49;
                background: #fff;
                position: relative;
            }
            .nav-pills-custom .map-link.active {
                color: #62B368;
                background: #fff;
            }
            
            @media (min-width: 992px) {
                .nav-pills-custom .map-link::before {
                    content: '';
                    display: block;
                    border-top: 8px solid transparent;
                    border-left: 10px solid #fff;
                    border-bottom: 8px solid transparent;
                    position: absolute;
                    top: 50%;
                    right: -10px;
                    transform: translateY(-50%);
                    opacity: 0;
                }
            }
            .nav-pills-custom .map-link.active::before {
                opacity: 1;
            }
        </style>
    </head>
    {{-- <body> --}}
        <div class="container-fluid p-5">
        <h1 class="fs-2 fw-bold mb-4 text-center">Peta Desa</h2>
        <section>
            <div class="row d-flex justify-content-center h-100">
                <div class="col-sm">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15163.102517595007!2d112.18152410094034!3d-7.763775255516937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785c4a061b549b%3A0xcbbb3103adb7b88d!2sKantor%20Desa%20Tulungrejo!5e0!3m2!1sen!2sid!4v1671502148983!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </section>
    <section class="py-3">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-3">
                <div class="d-flex align-items-start">
                  <div class="nav flex-column nav-pills nav-pills-custom me-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="map-link nav-link active mb-3 fw-bold shadow-md" id="v-pills-alamat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-alamat" type="button" role="tab" aria-controls="v-pills-alamat" aria-selected="true">Alamat Lengkap</button>
                    <button class="map-link nav-link mb-3 fw-bold shadow-md" id="v-pills-batas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-batas" type="button" role="tab" aria-controls="v-pills-batas" aria-selected="false">Batas Desa</button>
                    <button class="map-link nav-link mb-3 fw-bold shadow-md" id="v-pills-orbitasi-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orbitasi" type="button" role="tab" aria-controls="v-pills-orbitasi" aria-selected="false">Orbitasi</button>
                    <button class="map-link nav-link mb-3 fw-bold shadow-md" id="v-pills-luas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-luas" type="button" role="tab" aria-controls="v-pills-luas" aria-selected="false">Luas Desa</button>
                  </div>
                </div>
                </div>
                  <div class="col-md-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-alamat" role="tabpanel" aria-labelledby="v-pills-alamat-tab">
                        <h4 class="fw-bold mb-3">Alamat Lengkap</h4>
                        <p class="text-muted mb-2 user-select-all">Desa Tulungrejo, Kelurahan Pare, Kecamatan Pare, Kabupaten Kediri, Provinsi Jawa Timur 64212</p>
                    </div>
                    <div class="tab-pane fade" id="v-pills-batas" role="tabpanel" aria-labelledby="v-pills-batas-tab">
                        <h4 class="fw-bold mb-3">Batas Desa</h4>
                        <table class="table table-hover table-borderless text-muted">
                            <tr>
                                <th>Utara</th>
                                <td>Desa Bringin, Kecamatan Badas</td>
                            </tr>
                            <tr>
                                <th>Timur</th>
                                <td>Desa Lamong, Kecamatan Badas</td>
                            </tr>
                            <tr>
                                <th>Selatan</th>
                                <td>Desa Gedangsewu, Kecamatan Pare</td>
                            </tr>
                            <tr>
                                <th>Barat</th>
                                <td>Desa Pelem, Kecamatan Pare</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-orbitasi" role="tabpanel" aria-labelledby="v-pills-orbitasi-tab">
                        <h4 class="fw-bold mb-3">Orbitasi</h4>
                            <table class="table table-hover table-borderless text-muted">
                                <tr>
                                    <th>Jarak tempuh ke Ibu Kota Provinsi</th>
                                    <td>110 km</td>
                                </tr>
                                <tr>
                                    <th>Jarak tempuh ke Ibu Kota Kecamatan</th>
                                    <td>1,5 km</td>
                                </tr>
                                <tr>
                                    <th>Jarak tempuh ke Ibu Kota Kabupaten</th>
                                    <td>25 km</td>
                                </tr>
                                <tr>
                                    <th>Waktu tempuh ke Ibu Kota Kabupaten</th>
                                    <td>30 menit</td>
                                </tr>
                            </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-luas" role="tabpanel" aria-labelledby="v-pills-luas-tab">
                        <h4 class="fw-bold mb-3">Luas Desa</h4>
                            <table class="table table-hover table-borderless text-muted">
                                <tr>
                                    <th>Sawah</th>
                                    <td>289,24 Ha</td>
                                </tr>
                                <tr>
                                    <th>Tegal</th>
                                    <td>16,00 Ha</td>
                                </tr>
                                <tr>
                                    <th>Pemukiman</th>
                                    <td>193.17,40 Ha</td>
                                </tr>
                                <tr>
                                    <th>Hutan</th>
                                    <td>0,00 Ha</td>
                                </tr>
                                <tr>
                                    <th>Rawa-rawa</th>
                                    <td>0,00 Ha</td>
                                </tr>
                                <tr>
                                    <th>Perkantoran</th>
                                    <td>0,30 Ha</td>
                                </tr>
                                <tr>
                                    <th>Sekolah</th>
                                    <td>0,50 Ha</td>
                                </tr>
                                <tr>
                                    <th>Jalan</th>
                                    <td>24,59 Ha</td>
                                </tr>
                                <tr>
                                    <th>Usaha Perikanan</th>
                                    <td>2,00 Ha</td>
                                </tr>
                                <tr>
                                    <th>Lapangan Sepak Bola</th>
                                    <td>1,50 Ha</td>
                                </tr>
                                <tr>
                                    <th>Pemakaman</th>
                                    <td>5,50 Ha</td>
                                </tr>
                            </table>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        @endsection