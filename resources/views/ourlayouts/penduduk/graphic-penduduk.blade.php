@extends('layouts.app')
@section('container')
<h1 class="fs-1 fw-bold mb-3 text-center">Sensus Penduduk</h1>
<table class="table table-hover mb-4">
    <thead>
        <tr>
            <th scope="col">Kategori usia</th>
            <th scope="col">Laki-laki</th>
            <th scope="col">Perempuan</th>
            <th scope="col">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ageGender as $ag)
        <tr>
            <td>{{ $ag->age_category }}</td>
            <td>{{ $ag->male }}</td>
            <td>{{ $ag->female }}</td>
            <td>{{ $ag->male + $ag->female }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td class="fw-bold">Total</td>
            <td>{{$percentageBoys}}</td>
            <td>{{$percentageGirls}}</td>
            <td>{{$sumVillagers}}</td>
        </tr>
    </tfoot>
</table>

<canvas class="my-4" id="barChart1"></canvas>

<canvas class="my-4" id="barChart2"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
var ctx1 = document.getElementById('barChart1').getContext('2d');
var barChart = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['hidup', 'pindah', 'meninggal'],
        datasets: [{
            label: 'laki-laki',
            data: [
                {{ $villagers1->where('gender', 'laki-laki')->where('status', 'hidup')->count() }},
                {{ $villagers1->where('gender', 'laki-laki')->where('status', 'pindah')->count() }},
                {{ $villagers1->where('gender', 'laki-laki')->where('status', 'meninggal')->count() }}
            ],
            backgroundColor: '#66b3ff',
        }, {
            label: 'perempuan',
            data: [
                {{ $villagers1->where('gender', 'perempuan')->where('status', 'hidup')->count() }},
                {{ $villagers1->where('gender', 'perempuan')->where('status', 'pindah')->count() }},
                {{ $villagers1->where('gender', 'perempuan')->where('status', 'meninggal')->count() }}
            ],
            backgroundColor: '#ff9999',
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Status penduduk',
            fontSize: 36,
        },
        legend: {
            labels: {
                fontSize: 16
            }
        },
        scales: {
            y: [{
                beginAtZero: true,
            }],
        }
    }
});


     
    var ctx2 = document.getElementById('barChart2').getContext('2d');
    var barChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['pelajar', 'pekerja', 'lainnya'],
            datasets: [{
                label: 'laki-laki',
                data: [
                    {{ $villagers2->where('gender', 'laki-laki')->where('role', 'pelajar')->where('status', 'hidup')->count() }},
                    {{ $villagers2->where('gender', 'laki-laki')->where('role', 'pekerja')->where('status', 'hidup')->count() }},
                    {{ $villagers2->where('gender', 'laki-laki')->where('role', 'lainnya')->where('status', 'hidup')->count() }}
                ],
                backgroundColor: '#66b3ff',
            }, {
                label: 'perempuan',
                data: [
                    {{ $villagers2->where('gender', 'perempuan')->where('role', 'pelajar')->where('status', 'hidup')->count() }},
                    {{ $villagers2->where('gender', 'perempuan')->where('role', 'pekerja')->where('status', 'hidup')->count() }},
                    {{ $villagers2->where('gender', 'perempuan')->where('role', 'lainnya')->where('status', 'hidup')->count() }}
                ],
                backgroundColor: '#ff9999',
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Peran penduduk',
                fontSize: 40,
            },
            legend: {
                labels: {
                    fontSize: 16
                }
            },
            scales: {
                y: [{
                    beginAtZero: true,
                }],
            }
            
        }
    });
</script>


@endsection