<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<<<<<<< Updated upstream
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('navhf.navigation')
=======
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/public/css/dropdown-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

    <style>
        .login-btn {
            color: #124A49;
        }

        .login-btn:hover {
            outline: none;
            background: #124A49;
            color: white;
        }

        #barChart1, #barChart2 {
            width: 100px;
            height: 100px;
        }


  /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
    .portfolio-menu{
	        text-align:center;
        }
        .portfolio-menu ul li{
        	display:inline-block;
        	margin:0;
        	list-style:none;
        	padding:10px 15px;
        	cursor:pointer;
        	-webkit-transition:all 05s ease;
        	-moz-transition:all 05s ease;
        	-ms-transition:all 05s ease;
        	-o-transition:all 05s ease;
        	transition:all .5s ease;
        }
        
        .portfolio-item{
        	/*width:100%;*/
        }
        .portfolio-item .item{
        	/*width:303px;*/
        	float:left;
        	margin-bottom:10px;
        }
/*    body {*/
/*  display: grid;*/
/*  grid-template-columns: auto 0px; */
/*}*/

.top {
  --offset: 50px; 
  
  position: sticky;
  bottom: 20px;      
  margin-right:10px; 
  place-self: end;
  margin-top: calc(100vh + var(--offset));
  
  /* visual styling */
  width:45px;
  aspect-ratio:1;
  background:#ff8b24;
  border-radius:10px;
}
.top:before {
  content:"";
  position: absolute;
  inset:30%;
  transform:translateY(20%) rotate(-45deg);
  border-top:5px solid #fff;
  border-right:5px solid #fff;
}

/* remove the below if you don't want smooth scrolling */
html,
body {
  scroll-behavior: smooth;
}
    </style>

</head>
<body class="font-sans antialiased container-fluid p-0">
    {{-- <div class="min-h-screen bg-gray-100"> --}}
    @include('layouts.navbar')
>>>>>>> Stashed changes

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
<<<<<<< Updated upstream
            </main>
        </div>
    </body>
=======
    </main>
    </div> --}}
    <div class="">
        {{-- mt-3 --}}
        @yield('container')
    </div>
    @include('layouts.footer')
</body>
>>>>>>> Stashed changes
</html>
