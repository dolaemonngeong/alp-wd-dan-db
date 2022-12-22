@extends('layouts.app')
@section('home')
<div class="container-fluid p-5">
    <h1 class="fs-1 fw-bold mb-4 text-center">Prestasi Desa Tulungrejo</h1>
    <div class="row row-cols-1 mb-4">
        <div class="col d-flex justify-content-center">
            <div class="card mb-3 p-0">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="{{ asset('storage/achievement/26356.jpg' ) }}" class="img-fluid rounded-start align-content-stretch" alt="..." style="object-fit: cover">
                    </div>
                    <div class="col-8 d-flex flex-column">
                        <div class="card-body mb-0">
                            <span class="badge text-white mb-2" style="background-color: #124A49">Nasional</span>
                            <h5 class="card-title fw-bold">Desa yang Memiliki Lembaga Kursus dan Pelatihan Bahasa Asing Terbanyak</h5>
                            <p class="card-text">Rekor diberikan oleh Museum Rekor-Dunia Indonesia (MURI)</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="post-group">
                                    <p class="fw-bold mb-0">
                                        <img class="avatar-sm img-fluid" width="30px" src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt=" portrait">Tulungrejo
                                    </p>
                                </div>
                                <span class="small"><span class="far fa-calendar-alt me-2"></span>2022-11-26</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        {{-- <div class="d-flex justify-content-between mb-3">
            @foreach($achievements as $achievement)
                <button type="button" class="btn">{{ $achievement->category->name }}</button>
        @endforeach
        {{-- <button type="button" class="btn active">Lihat Semua</button>
                <button type="button" class="btn">Kategori 1</button>
                <button type="button" class="btn">Kategori 2</button>
                <button type="button" class="btn">Kategori 2</button>
                <button type="button" class="btn">Kategori 3</button>
            </div> --}}
        {{-- @foreach($achievements as $achievement) --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-flex justify-content-center">
            {{-- @endforeach --}}
            @foreach($achievements as $achievement)
            <div class="col d-flex justify-content-center">
                <div class="card">
                    {{-- <img width="300" src="{{ asset('storage/'.$structure->image ) }}" href="{{ asset('storage/'.$structure->image)}}" class="img-fluid img-thumbnail rounded-circle" alt="">
                    --}}
                    <img src="{{ asset('storage/'.$achievement->image ) }}" href="{{ asset('storage/'.$achievement->image)}}" class="card-img-top img-fluid" alt="..." />
                    <div class="card-body">
                        <span class="badge text-white mb-2" style="background-color: #124A49">{{ $achievement->category->name}}</span>
                        <h5 class="card-title fw-bold">{{ $achievement->name }}</h5>
                        <p class="card-text">{{ $achievement->description }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="post-group">
                                <p class="fw-bold mb-0">
                                    <img class="avatar-sm me-2 img-fluid" width="30px" src="https://kedirikab.go.id/uploads/filex/logo_pemkab_official_1660871333.png" alt=" portrait">Tulungrejo
                                </p>
                            </div>
                            <span class="small"><span class="far fa-calendar-alt me-2"></span>{{ $achievement->date_achievement }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col d-flex justify-content-center">
                    <div class="card">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="card-img-top img-fluid" alt="..." />
                        <div class="card-body">
                            <span class="badge text-white mb-2" style="background-color: #124A49">Category</span>
                            <h5 class="card-title fw-bold">Prestasi 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ullam!</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="post-group">
                                  <p class="fw-bold mb-0">
                                      <img class="avatar-sm me-2 img-fluid rounded-circle" height="50px" width="50px" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" alt=" portrait">Jo J. Moore
                                  </p>
                              </div>
                              <span class="small"><span class="far fa-calendar-alt me-2"></span>15 March 2021</span>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="card">
                        <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="card-img-top img-fluid" alt="..." />
                        <div class="card-body">
                            <span class="badge text-white mb-2" style="background-color: #124A49">Category</span>
                            <h5 class="card-title fw-bold">Prestasi 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ullam!</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                              <div class="post-group">
                                  <p class="fw-bold mb-0">
                                      <img class="avatar-sm me-2 img-fluid rounded-circle" height="50px" width="50px" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" alt=" portrait">Jo J. Moore
                                  </p>
                              </div>
                              <span class="small"><span class="far fa-calendar-alt me-2"></span>15 March 2021</span>
                          </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </section>
</div>
@endsection
