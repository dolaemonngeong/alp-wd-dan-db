@extends('navhf.header')
@section('container')
<div class="flex items-center w-100% container-fluid">
    <h1 class="justify-start" style="font-weight: bold">
        {{ __('Daftar Surat Online') }}
    </h1>
<<<<<<< Updated upstream
    <div class="ms-auto">
        <input type="button" class="btn btn-dark text-white text-sm rounded-md" href="{{ route('login') }}" value="Tambah Data"/>
    </div>
</div>
<div class="container-fluid mt-8">
    <form class="d-flex" role="search">
      <input class="block me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Cari</button>
      <div class="dropdown">
        <button class="btn btn-outline-dark dropdown-toggle ml-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Saring
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </form>  
=======
    {{-- <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-black-400 hover:text-light-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Tambah Data
    </a>   --}}
    <a class="btn text-light ms-auto" href="{{ route("letters.create") }}" role="button" style="background-color: #124A49">Tambah Data</a>
</div>
<div class="container-fluid my-4">
    <form action="/data-surat" method="POST" class="form d-flex" role="search">
        @csrf
        <input type="search" value="{{ $search }}"class="form-control outline-secondary rounded-md me-3" placeholder="Cari berdasarkan nama atau NIK..." name="search" class="form-control">
        {{-- <input class="block bg-white outline-gray shadow-sm me-2 w-20% rounded-md " type="search" placeholder="Cari data berdasarkan nama atau NIK" aria-label="Search"> --}}
        {{-- <input type="search" class="bg-white-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 mr-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari data berdasarkan nama atau NIK"> --}}
        <select name="proses" id="searchSelect" class="form-select" style="width: auto" aria-label="Default select example">
            {{-- <select class=""  name="proses"> --}}
            <option value="#">Semua</option>
            <option value="selesai" {{ ($proses == "selesai") ? 'selected' : '' }}>Selesai</option>
            <option value="menunggu" {{ ($proses == "menunggu") ? 'selected' : '' }}>Menunggu</option>
        </select>
        <button class="btn btn-outline-secondary" type="submit">Cari</button>
        {{-- <button type="submit" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Cari</button> --}}
        
    </form>
>>>>>>> Stashed changes
</div>


<div class="my-4 flex justify-start">
    <!-- Previous Button -->
    <a href="#" class="text-decoration-none inline-flex items-center px-4 py-2 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Previous
    </a>
    <!-- Next Button -->
    <a href="#" class="text-decoration-none ms-auto inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black bg-white border border-black rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
        Next
    </a>  
</div>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Product name
                </th>
                <th scope="col" class="py-3 px-6">
                    Color
                </th>
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                    Price
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
<<<<<<< Updated upstream
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="py-4 px-6">
                    Sliver
                </td>
                <td class="py-4 px-6">
                    Laptop
                </td>
                <td class="py-4 px-6">
                    $2999
                </td>
                <td class="py-4 pl-6 text-right">
                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 mr-3 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Unduh</button>
                    <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-2 py-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Hapus</button>
=======
            @foreach($letters as $letter)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $letter['name'] }}</td>
                <td>{{ $letter['email'] }}</td>
                <td>{{ $letter['phone'] }}</td>
                <td>{{ $letter->template->name }}</td>
                <td> <a href="{{ asset('storage/'.$letter['file'])}}">{{ $letter['file'] }}</a></td>
                <td colspan="2">{{ $letter['message'] }}</td>
                <td>
                {{-- @if($letter['proses']) --}}
                <input disabled style="color: #124A49;" type="checkbox" name="proses" {{ ($letter['proses'] === 'selesai') ? 'checked' : ''}}/>&nbsp;
                </td>

                <td>
                    <a class="btn text-light" href="{{ route("letters.edit", $letter->id) }}" role="button" style="background-color: #A69297"><i class="fas fa-edit"></i></a>
                    {{-- <a class="btn text-light" href="{{ route("etters.destroy", $position->id) }}" role="button" style="background-color: #F04A49"><i class="fa fa-trash"></i></a> --}}
                </td>
                <td>
                    <form action="{{ route("letters.destroy", $letter->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn text-light" style="background-color: #F04A49" onclick="return confirm('Yakin ingin menghapusnya?');"><i class="fa fa-trash"></i></button>
                    </form>
>>>>>>> Stashed changes
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="my-4 flex flex-col items-center">
    <!-- Help text -->
    <span class="text-sm text-gray-700 dark:text-gray-400">
        Showing <span class="font-semibold text-gray-900 dark:text-white">1</span> to <span class="font-semibold text-gray-900 dark:text-white">10</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span> Entries
    </span>
    <div class="inline-flex mt-2 xs:mt-0">
      <!-- Buttons -->
      <button class="rounded-lg inline-flex items-center px-4 py-2 text-sm font-medium text-black bg-white border-black rounded-l border-1 hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          {{-- <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg> --}}
          Prev
      </button>
      <button class="rounded-lg ml-4 inline-flex items-center px-4 py-2 text-sm font-medium text-black bg-white border-black border-1 border-l rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
          Next
          {{-- <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
      </button>
    </div>
</div>  
@endsection