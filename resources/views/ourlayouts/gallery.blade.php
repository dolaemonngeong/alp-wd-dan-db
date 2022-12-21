@extends('layouts.app')

@section('title', 'Galeri Kami')

@section('container')

<h1 class="mb-3 fw-bold fs-1 text-center">Galeri Foto</h1>
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
        <section class="container">
            <div class="row">
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
         </div>
         <div class="portfolio-item row">
         @foreach($galleries as $gallery)
         <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="{{ asset('storage/'.$gallery->image ) }}" alt="">
               </a>
            </div>
         @endforeach
            
            {{-- <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
               <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/beautiful-girl-near-wall_1157-16401.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/beautiful-girl-near-wall_1157-16401.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/woman-taking-photograph-her-boyfriend-enjoying-piggyback-ride-his-back_23-2147841613.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/woman-taking-photograph-her-boyfriend-enjoying-piggyback-ride-his-back_23-2147841613.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/girl-smiling-making-auto-photo-with-her-friends-around_1139-593.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/girl-smiling-making-auto-photo-with-her-friends-around_1139-593.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/laptop-wooden-table_53876-20635.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/business-woman-working-laptop_1388-67.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/group-people-holding-laptop-mockup-charity_23-2148069565.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-cheerful-woman-headphones-sitting-stairs_1262-17488.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/celebration-concept-close-up-portrait-happy-young-beautiful-african-woman-black-t-shirt-smiling-with-colorful-party-balloon-yellow-pastel-studio-background_1258-934.jpg" alt="">
               </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-woman-showing-arm-muscles_23-2148056021.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/happy-woman-having-video-call-using-laptop-office_23-2148056211.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mockup-table-with-plants_23-2147955548.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/blank-colorful-adhesive-notes-against-wooden-wall-with-office-stationeries-laptop_23-2148052717.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-psd/woman-using-laptop-smartphone_53876-76350.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/young-couple-taking-selfie-mobile-phone-against-blue-background_23-2148056292.jpg" alt="">
               </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/close-up-blonde-woman-sitting-sofa-using-laptop-with-blank-white-screen_23-2148028738.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/group-happy-friends-taking-selfie-cellphone_23-2147859575.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div> --}}
         </div>
         @endsection