@extends('adminlte::page')
@section('title', 'Home')
@section('content_header')
    <h1>Home</h1>
@stop
@section('content')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="card">
                    <div class="card-header text-center text-sm">
                        This page was last updated on <span class="text-bold text-dark">{{date('Y/m/d H:i')}}</span>. <span class="text-info">Refresh</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{$members_count}}</h3>
                                      <p>Member</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-users"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="small-box bg-gradient-success">
                                    <div class="inner">
                                      <h3><strong>₱</strong>
                                        {{ $total_savings }}</h3>
                                      <p>Total Savings</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-wallet"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            <div class="col-3">
                                <div class="small-box bg-gradient-warning">
                                    <div class="inner">
                                      <h3>299</h3>
                                      <p>Total Loans Released</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-money-bill"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>

                            <div class="col-3">
                                <div class="small-box bg-gradient-danger">
                                    <div class="inner">
                                      <h3>5</h3>
                                      <p>Fully Paid Loans</p>
                                    </div>
                                    <div class="icon">
                                      <i class="fas fa-cash-register"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">
                                      More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="alert-heading">Announcements!</h4>
                    <p>Attention! The renewal of franchise is on December 2022.
                        Have a good day!</p>
                    <hr>
                    {{-- <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p> --}}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-danger">Savings Collection Monthly</h3>
                            {{-- <a href="javascript:void(0)">View Report</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <canvas id="savingsCollectionChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title text-danger">Loans Released Monthly</h3>
                            {{-- <a href="javascript:void(0)">View Report</a> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="position-relative mb-4">
                            <canvas id="loanCollectionChart" height="200"></canvas>
                        </div>
                    </div>
                </div>
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
                    yAxes: [{
                        stacked: false,
                        scaleLabel: {
                        display: true,
                        fontColor: 'white',
                        fontSize: 25,
                        labelString: 'Faction Points'
                        },
                        ticks: {
                        fontColor: 'white',
                        fontSize: 20,
                        min: 0
                        },
                        gridLines: {
                        color: 'white'
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        scaleLabel: {
                        display: true,
                        fontColor: 'white',
                        fontSize: 25,
                        labelString: 'Day'
                        },
                        ticks: {
                        fontColor: 'white',
                        fontSize: 20,
                        min: 0
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
