@extends('layouts.app')
@section('container')

<p class="d-justify-content-center">Jumlah penduduk saat ini {{ $sumVillagers }} orang dengan {{ $percentageBoys }} % laki-laki dan {{ $percentageGirls }} % perempuan<p>

<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">Kategori usia</th>
            <th scope="col">Laki-laki</th>
            <th scope="col">Perempuan</th>
            <th scope="col">Total</th>
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
</table>

<canvas class="w-50%" id="barChart1"></canvas>

<canvas class="w-50%" id="barChart2"></canvas>

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