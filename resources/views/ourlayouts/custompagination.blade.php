{{-- <head>
    <link rel="stylesheet" href="pagination.css">
</head>
<body>
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		@if ($paginator->onFirstPage())
		<li class="page-item disabled">
			<a class="page-link" href="#"
			tabindex="-1">Previous</a>
		</li>
		@else
		<li class="page-item"><a class="page-link"
			href="{{ $paginator->previousPageUrl() }}">
				Previous</a>
		</li>
		@endif

		@foreach ($elements as $element)
		@if (is_string($element))
		<li class="page-item disabled">{{ $element }}</li>
		@endif

		@if (is_array($element))
		@foreach ($element as $page => $url)
		@if ($page == $paginator->currentPage())
		<li class="page-item active">
			<a class="page-link">{{ $page }}</a>
		</li>
		@else
		<li class="page-item">
			<a class="page-link"
			href="{{ $url }}">{{ $page }}</a>
		</li>
		@endif
		@endforeach
		@endif
		@endforeach

		@if ($paginator->hasMorePages())
		<li class="page-item">
			<a class="page-link"
			href="{{ $paginator->nextPageUrl() }}"
			rel="next">Next</a>
		</li>
		@else
		<li class="page-item disabled">
			<a class="page-link" href="#">Next</a>
		</li>
		@endif
	</ul>
</nav>
	@endif
</body> --}}

<head>
    <style>
        .pagination{
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #124A49;
            padding: 10px 40px;
            border-radius: 6px;
        }
        .page{
            margin: 20px 30px;
        }
        .page .link-page{
            display: inline-block;
            margin: 0 10px;
            background: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 500;
            line-height: 30px;
            cursor: pointer;
            background-position: 0 -45px;
            transition: background-position 0.5s;
        }

        .page .link-page.active{
            color: #fff;
            background: #124A49;
            background-repeat: no-repeat;
            width: 30px;
            height: 30px;
            background-position: 0 0;
        }

        .prev:hover, .next:hover, .page-arrow:hover{
            color: black;
        }

        .prev, .next{
            display: inline-flex;
            align-items: center;
            font-size: 16px;
            font-weight: 500;
            color: #124A49;
            background: transparent;
            outline: none;
            border: none;
            cursor: pointer;
        }
        .page-arrow{
            color: #124A49;
        }
    </style>
</head>
<body>
@if ($paginator->hasPages())
<div class="container-pagination">
		<div class="pagination">
            @if ($paginator->onFirstPage())
                <a class="prev disabled" href="#" tabindex="-1"><i class="fa-solid fa-angle-left page-arrow mr-2"></i>Sebelumnya</a>
            @else
				<a class="prev" href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-angle-left page-arrow mr-2"></i>Sebelumnya</a>
            @endif
            
            <ul class="page">
            @foreach ($elements as $element)
		    @if (is_string($element))
				<li class="disabled">{{ $element }}</li>
                @endif
                @if (is_array($element))
		        @foreach ($element as $page => $url)
		        @if ($page == $paginator->currentPage())
					<a class="link-page active" href="#">{{ $page }}</a>
                @else
			        <a class="link-page" href="{{ $url }}">{{ $page }}</a>
		        @endif
		        @endforeach
		        @endif
		        @endforeach
                </li>
            </ul>

                @if ($paginator->hasMorePages())
                    <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next<i class="fa-solid fa-angle-right page-arrow ml-2"></i></a>
                @else
			        <a class="next disabled" href="#">Selanjutnya<i class="fa-solid fa-angle-right page-arrow ml-2"></i></a>
		        @endif
		</div>
</nav>
            @endif

            <script>
                // let link = document.getElementsByClassName("link-page");

                // let currentValue = 1;

                // function activeLink(){
                //     for(1 of link){
                //         1.classList.remove("active");
                //     }
                // }
            </script>
</body>

{{-- <head>
    <style>
    .pagination-container{
        margin: 100px auto;
        text-align: center;
    }
    .pagination{
        position: relative;
    }
    
    a{
        position: relative;
        display: inline-block;
        color: #124A49;
        text-decoration: none;
        font-size: 1.2rem;
        padding: 8px 16px 10px;
    }
    
    a::before{
        z-index: -1;
        position: absolute;
        height: 100%;
        width: 100%;
        content: "";
        top: 0;
        left: 0;
        background-color: #124A49;
        border-radius: 24px;
        transform: scale(0);
        transition: all 0.2s;
    }
    a:hover, .pagination-active{
        color: #fff;
    }
    
    a:hover::before, .pagination-active::before{
        transform: scale(1);
    }
    
    .pagination-active{
        color: #fff;
    }
    .pagination-active::before{
        transform: scale(1);
    }
            
    .pagination-newer{
        margin-right: 50px;
    }
        
    .pagination-older{
        margin-left: 50px;
    }     
    </style>
</head>
<body>
@if ($paginator->hasPages())
<nav class="pagination-container">
		<div class="pagination">
            @if ($paginator->onFirstPage())
                <a class="pagination-newer disabled" href="#" tabindex="-1">PREV</a>
            @else
				<a class="pagination-newer" href="{{ $paginator->previousPageUrl() }}">PREV</a>
            @endif
            
            @foreach ($elements as $element)
		    @if (is_string($element))
				<li class="pagination-inner disabled">{{ $element }}</li>
                @endif
                @if (is_array($element))
		        @foreach ($element as $page => $url)
		        @if ($page == $paginator->currentPage())
					<a class="pagination-active" href="#">{{ $page }}</a>
                @else
			        <a href="{{ $url }}">{{ $page }}</a>
		        @endif
		        @endforeach
		        @endif
		        @endforeach

                @if ($paginator->hasMorePages())
                    <a class="pagination-older" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
                @else
			        <a class="pagination-older disabled" href="#">Next</a>
		        @endif
                </li>
		</div>
</nav>
            @endif

            <script>
                $('.pagination-inner a').on('click', function() {
		            $(this).siblings().removeClass('pagination-active');
		            $(this).addClass('pagination-active');
                })
            </script>
</body> --}}