@extends('layouts.app')
@section('home')
<section class="team text-center py-5">
       <div class="container overflow-hidden">
         <div class="header my-5">
           <h1 class="fw-bold">Meet our Team </h1>
           <p class="text-muted">Meet and Greet our Team Members</p>
         </div>
         @foreach($structures as $structure)
         @if($structure->status_jabat == "berjalan")
         <div class="row d-flex justify-content-around">
           <div class="col-xs-12 col-md-4">
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
         {{-- <!--kades-->
         <div class="row d-flex justify-content-around">
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">Ir. Matnurkasan</h4>
                 <p class="text-muted">Kepala Desa</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">-</h4>
                 <p class="text-muted">Sekretaris Desa</p>
               </div>
             </div>
           </div>
           </div>
           <!--kaur-->
           <div class="row d-flex justify-content-around">
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-30">Bambang Satindriantono</h4>
                 <p class="text-muted">Kepala Urusan Tata Usaha dan Umum</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-30">Sukardi</h4>
                 <p class="text-muted">Kepala Urusan Keuangan</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-30">Solichan</h4>
                 <p class="text-muted">Kepala Urusan Perencanaan</p>
               </div>
             </div>
           </div>
         </div>
         <!--kasi-->
         <div class="row d-flex justify-content-center">
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-10">Supriyantoro</h4>
                 <p class="text-muted">Kepala Seksi Pemerintahan</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-20">Bonaji</h4>
                 <p class="text-muted">Kepala Seksi Kesejahteraan</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold h-30">Abu Toyib</h4>
                 <p class="text-muted">Kepala Seksi Pelayanan</p>
               </div>
             </div>
           </div>
         </div>
         <!--kasun-->
         <div class="row d-flex justify-content-center">
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">Supriyadi</h4>
                 <p class="text-muted">Kepala Dusun Tulungrejo</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">Imam Sayuti</h4>
                 <p class="text-muted">Kepala Dusun Mulyosari</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">Wahyudi</h4>
                 <p class="text-muted">Kepala Dusun Mangunrejo</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">Matsudi</h4>
                 <p class="text-muted">Kepala Dusun Tegalsari</p>
               </div>
             </div>
           </div>
           <div class="col-xs-12 col-md-4">
             <div class="img-block mb-5">
               <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
               <div class="content mt-2">
                 <h4 class="fw-bold">-</h4>
                 <p class="text-muted">Kepala Dusun Puhrejo</p>
               </div>
             </div>
           </div>
         </div>
       </div> --}}
     </section>
     @endsection