@extends('layouts.app')
@section('container')

<canvas id="pie-chart"></canvas>
<canvas id="myPieChart"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>


<script>
    // Create a pie chart using Chart.js
    // Create a pie chart using Chart.js
var ctx2 = document.getElementById('pie-chart').getContext('2d');
var chart = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
            data: [{{ $males }}, {{ $females }}],
            backgroundColor: ['#3498db', '#e74c3c']
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Jenis Kelamin Pendatang',
            fontSize: 40
        },
        legend: {
            labels: {
                fontSize: 20
            }
        },
        cutoutPercentage: 80,
    }
});

</script>

<script>
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Male", "Female"],
    datasets: [{
      data: [{{ $males }}, {{ $females }}],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9', '#17a673'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>
@endsection
