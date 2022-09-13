@extends('adminlte::page')
@section('title', 'Reports')
@section('content_header')
    <h1>Reports</h1>
@stop
@section('content')
    <div class="container-fluid px-2 py-2">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h1 class="card-title text-primary">
                            Loan Collection per Month
                        </h1>
                    </div>
                    <div class="card-body">
                        <canvas id="loanCollectionChart" class="chartjs-render-monitor mx-2 my-2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="100%" height="500"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h1 class="card-title text-danger">
                            Savings Collection per Month
                        </h1>
                    </div>
                    <div class="card-body">
                        <canvas id="savingsCollectionChart" class="chartjs-render-monitor mx-2 my-2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="100%" height="500"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <canvas id="loanCollectionChart" class="chartjs-render-monitor mx-2 my-2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block;" width="100%" height="500"></canvas>
            </div>
        </div>
    </div>
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {
            var loanChartCanvas = $('#loanCollectionChart').get(0).getContext('2d')
            var loanChartOptions = {
                maintainAspectRatio : false,
                responsive: true,
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }],
                    yAxes: [{
                        gridLines: {
                            display: false,
                        }
                    }]
                }
            }
            var loanChartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Loans',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: true,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [0, 21000, 28500, 10000, 27500, 35000, 22000, 42000, 28000, 27500, 26500, 11000],
                    }
                ]
            }

            var loanChart = new Chart(loanChartCanvas, {
                type: 'line',
                data: loanChartData,
                options: loanChartOptions,
            })

            var savingsChartCanvas = $('#savingsCollectionChart').get(0).getContext('2d')
            var savingsChartOptions = $.extend(true, {}, loanChartOptions)
            var savingsChartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                    {
                        label: 'Loans',
                        backgroundColor: 'rgba(235, 64, 52,0.9)',
                        borderColor: 'rgba(235, 64, 52,0.8)',
                        pointRadius: true,
                        pointColor: '#eb4034',
                        pointStrokeColor: 'rgba(235, 64, 52,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(235, 64, 52,1)',
                        data: [0, 23000, 11000, 9000, 20000, 45000, 40000, 42000, 28000, 27500, 18000, 11000],
                    }
                ]
            }

            var savingsChart = new Chart(savingsChartCanvas, {
                type: 'line',
                data: savingsChartData,
                options: savingsChartOptions
            })
        })
    </script>
@stop
